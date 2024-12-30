<?php

namespace Redcoder\CoordinateProcessor;

use XMLReader;
use SimpleXMLElement;
use DOMDocument;
use Redcoder\CoordinateProcessor\Exceptions\FileProcessingException;
use Redcoder\CoordinateProcessor\Contracts\Processor;
use Redcoder\CoordinateProcessor\Entities\MultiPolygonEntity;
use Redcoder\CoordinateProcessor\Entities\PolygonEntity;
use Redcoder\CoordinateProcessor\Entities\CoordinateEntity;

class KMLProcessor implements Processor
{
    public const KML_SCHEMA = "https://schemas.opengis.net/kml/2.2.0/ogckml22.xsd";
    public const FEATURE_LAYER_ID_PATTERN = "/^FeatureLayer[0-9]+$/";
    // public const DESCRIPTION_CODE_KEY = "کد پلاک";
    public const DESCRIPTION_CODE_KEY = "Pelak";
    // public const DESCRIPTION_AREA_KEY = "مساحت پلاک";
    public const DESCRIPTION_AREA_KEY = "Area";
    // public const DESCRIPTION_LU_KEY = "کاربری پلاک";
    public const DESCRIPTION_LU_KEY = "LU";
    public const DESCRIPTION_pelak_asli_KEY = "pelak_asli";
    public const DESCRIPTION_pelak_fare_KEY = "pelak_fare";
    public function process(string $file): MultiPolygonEntity
    {
        if (!file_exists($file))
            throw new FileProcessingException("File not found : $file");

        // Use Cursor Based XML Reader to Optimize Performance
        $reader = new XMLReader();

        if (!$reader->open($file))
            throw new FileProcessingException("Failed to Open KML File : $file");

        $reader->setSchema(self::KML_SCHEMA);

        $multiPolygon = new MultiPolygonEntity();

        $insideDocument = false;
        $insideFolder = false;

        while ($reader->read()) {
            // Validate KML Structure
            if (!$reader->isValid() && empty($multiPolygon)) {
                $reader->close();
                throw new FileProcessingException("Invalid KML 777File : $file");
            }elseif(!$reader->isValid() && !empty($multiPolygon)){
                $reader->close();
                return $multiPolygon;
            }

            switch ($reader->nodeType) {
                case XMLReader::ELEMENT:
                    if ($reader->localName == 'Document')
                        $insideDocument = true;
                    elseif ($insideDocument && $reader->localName == 'Folder' && preg_match(self::FEATURE_LAYER_ID_PATTERN, $reader->getAttribute('id')))
                        $insideFolder = true;
                    elseif ($insideFolder && $reader->localName == 'Placemark') {
                        try {
                            $this->processPlacemark($reader->readOuterXml(), $multiPolygon);
                        } catch (FileProcessingException $e) {
                            throw new FileProcessingException("Failed to process placemark #" . $reader->getAttribute('id') . " : " . $e->getMessage());
                        }
                    }
                    break;
                case XMLReader::END_ELEMENT:
                    if ($reader->localName == 'Document')
                        break 2; // Exit both while loop and switch
                    elseif ($reader->localName == 'Folder')
                        $insideFolder = false;
                    break;
            }

        }

        $reader->close();
        return $multiPolygon;
    }

    public function processPlacemark(string $placemarkXML, MultiPolygonEntity $multiPolygon): void
    {
        $placemarkXML = $this->getPlacemarkXML($placemarkXML);

        if (!$placemarkXML->description)
            throw new FileProcessingException("No description element found");

        // Parse description to get polygon code
        $polygonCode = $this->parseDescription($placemarkXML->description);
        $polygonArea = $this->parseDescriptionArea($placemarkXML->description);
        $polygonLU = $this->parseDescriptionLU($placemarkXML->description);
        $polygon_pelak_fare = $this->parseDescription_pelak_fare($placemarkXML->description);
        $polygon_pelak_asli = $this->parseDescription_pelak_asli($placemarkXML->description);


        foreach ($placemarkXML->MultiGeometry as $multiGeometry) {
            // Parse coordinates and create PolygonEntity
            $multiCoordinates = $this->parseMultiCoordinates($multiGeometry->Polygon->outerBoundaryIs->LinearRing->coordinates);
            $multiPolygon->addPolygon(new PolygonEntity($polygonCode,$polygonArea,$polygonLU,$polygon_pelak_asli,$polygon_pelak_fare, $this->multiCoordinatesToPoints($multiCoordinates)));
        }

        // Release Memory
        unset($placemarkXML);
    }

    public function getPlacemarkXML(string $placemarkXML): SimpleXMLElement
    {
        // Use SimpleXMLElement for easier access
        return new SimpleXMLElement($placemarkXML);
    }

    /**
     * @param string $multiCoordinates recivies coordinates element from KML structure
     * @return array returns an array of string contains coordinates seperated by comma (long,lat,alt)
     */
    public function parseMultiCoordinates(string $multiCoordinates): array
    {
        return explode(' ', trim($multiCoordinates));
    }

    /**
     * @param array $multiCoordinates recivies an array of strings of comma separated coordinates (long,lat,alt)
     * @return array returns an array of CoordinateEntity instances
     */
    public function multiCoordinatesToPoints(array $multiCoordinates): array
    {
        $points = [];

        foreach ($multiCoordinates as $coordinates) {
            $coordinates = explode(',', $coordinates);
            $points[] = new CoordinateEntity($coordinates[1], $coordinates[0]);
        }

        return $points;
    }

    /**
     * @param string $description recieves description html from Placemark structure
     * @return string returns polygon code
     */
    public function parseDescription(string $description): string
    {
        $description = str_replace(['<![CDATA[', ']]>'], '', $description);
        //var_dump($description);
        $document = new DOMDocument();
        $document->loadHTML($description);
        $trTags = $document->getElementsByTagName('tr');

        foreach($trTags as $trTag) {
            $tdTags = $trTag->getElementsByTagName('td');
            $firstTd = $tdTags->item(0);
            $lastTd = $tdTags->item($tdTags->length - 1);
            if($firstTd && $lastTd) {
                if(trim($firstTd->nodeValue) == self::DESCRIPTION_CODE_KEY) {
                    return trim($lastTd->nodeValue);
                }
            }
        }
        return "";

        throw new FileProcessingException('Invalid Description to Parse');
    }
    public function parseDescriptionArea(string $description): string
    {
        $description = str_replace(['<![CDATA[', ']]>'], '', $description);

        $document = new DOMDocument();
        $document->loadHTML($description);
        $trTags = $document->getElementsByTagName('tr');

        foreach($trTags as $trTag) {
            $tdTags = $trTag->getElementsByTagName('td');
            $firstTd = $tdTags->item(0);
            $lastTd = $tdTags->item($tdTags->length - 1);

            if($firstTd && $lastTd) {
                if(trim($firstTd->nodeValue) == self::DESCRIPTION_AREA_KEY) {
                    return trim($lastTd->nodeValue);
                }
            }
        }
        return "";

        throw new FileProcessingException('Invalid Description to Parse');
    }
    public function parseDescriptionLU(string $description): string
    {
        $description = str_replace(['<![CDATA[', ']]>'], '', $description);

        $document = new DOMDocument();
        $document->loadHTML($description);
        $trTags = $document->getElementsByTagName('tr');

        foreach($trTags as $trTag) {
            $tdTags = $trTag->getElementsByTagName('td');
            $firstTd = $tdTags->item(0);
            $lastTd = $tdTags->item($tdTags->length - 1);

            if($firstTd && $lastTd) {
                if(trim($firstTd->nodeValue) == self::DESCRIPTION_LU_KEY) {
                    return trim($lastTd->nodeValue);
                }
            }
        }
        return "";

        throw new FileProcessingException('Invalid Description to Parse');
    }
    public function parseDescription_pelak_asli(string $description): string
    {
        $description = str_replace(['<![CDATA[', ']]>'], '', $description);

        $document = new DOMDocument();
        $document->loadHTML($description);
        $trTags = $document->getElementsByTagName('tr');

        foreach($trTags as $trTag) {
            $tdTags = $trTag->getElementsByTagName('td');
            $firstTd = $tdTags->item(0);
            $lastTd = $tdTags->item($tdTags->length - 1);

            if($firstTd && $lastTd) {
                if(trim($firstTd->nodeValue) == self::DESCRIPTION_pelak_asli_KEY) {
                    return trim($lastTd->nodeValue);
                }
            }
        }
        return "";

        throw new FileProcessingException('Invalid Description to Parse');
    }
    public function parseDescription_pelak_fare(string $description): string
    {
        $description = str_replace(['<![CDATA[', ']]>'], '', $description);

        $document = new DOMDocument();
        $document->loadHTML($description);
        $trTags = $document->getElementsByTagName('tr');

        foreach($trTags as $trTag) {
            $tdTags = $trTag->getElementsByTagName('td');
            $firstTd = $tdTags->item(0);
            $lastTd = $tdTags->item($tdTags->length - 1);

            if($firstTd && $lastTd) {
                if(trim($firstTd->nodeValue) == self::DESCRIPTION_pelak_fare_KEY) {
                    return trim($lastTd->nodeValue);
                }
            }
        }
        return "";

        throw new FileProcessingException('Invalid Description to Parse');
    }
}
