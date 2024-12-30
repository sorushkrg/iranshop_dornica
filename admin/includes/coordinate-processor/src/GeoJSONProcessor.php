<?php

namespace Redcoder\CoordinateProcessor;

use Redcoder\CoordinateProcessor\Contracts\Processor;
use Redcoder\CoordinateProcessor\Entities\CoordinateEntity;
use Redcoder\CoordinateProcessor\Entities\MultiPolygonEntity;
use Redcoder\CoordinateProcessor\Entities\PolygonEntity;
use Redcoder\CoordinateProcessor\Exceptions\FileProcessingException;

class GeoJSONProcessor implements Processor
{
    public const geometries = [
        'MULTI_POLYGON' => 'MultiPolygon',
        'POLYGON' => 'Polygon'
    ];
    
    // public const PROPERTIES_CODE_KEY = "کد پلاک";
    public const PROPERTIES_CODE_KEY ="Pelak";
    // public const PROPERTIES_AREA_KEY = "مساحت پلاک";
    public const PROPERTIES_AREA_KEY =  "shape area";
    // public const PROPERTIES_LU_KEY = "کاربری پلاک";
    public const PROPERTIES_LU_KEY = "LU";
    public const PROPERTIES_pelak_asli_KEY = "pelak_asli";
    public const PROPERTIES_pelak_fare_KEY = "pelak_fare";

    public function process(string $file): MultiPolygonEntity
    {
        if (!file_exists($file))
            throw new FileProcessingException("File not found : $file");

        $geoJSON = json_decode(file_get_contents($file), true);

        if (!$this->validateGeoJSON($geoJSON))
            throw new FileProcessingException("GeoJSON Structure is invalid : $file");

        $multiPolygon = new MultiPolygonEntity();

        foreach ($geoJSON['features'] as $key => $feature) {
            if (!$this->validateFeature($feature))
                throw new FileProcessingException('Feature Structure is invalid : Feature #' . $key);

            $polygonCode = $this->extractPolygonCode($feature['properties']);
            $polygonArea = $this->extractPolygonArea($feature['properties']);
            $polygonLU = $this->extractPolygonLU($feature['properties']);
            $polygon_pelak_asli = $this->extractPolygon_pelak_asli($feature['properties']);
            $polygon_pelak_fare = $this->extractPolygon_pelak_fare($feature['properties']);

            $points = [];

            if ($feature['geometry']['type'] == self::geometries['MULTI_POLYGON']) {
                foreach ($feature['geometry']['coordinates'][0] as $multiCoordinates) {
                    foreach ($multiCoordinates as $coordinates) {
                        $points[] = new CoordinateEntity($coordinates[1], $coordinates[0]);
                    }

                    $multiPolygon->addPolygon(new PolygonEntity($polygonCode,$polygonArea,$polygonLU,$polygon_pelak_asli,$polygon_pelak_fare,$points));
                }
            } else if ($feature['geometry']['type'] == self::geometries['POLYGON']) {
                foreach ($feature['geometry']['coordinates'] as $coordinates) {
                    $points[] = new CoordinateEntity($coordinates[1], $coordinates[0]);
                }

                $multiPolygon->addPolygon(new PolygonEntity($polygonCode,$polygonArea,$polygonLU,$polygon_pelak_asli,$polygon_pelak_fare,$points));
            }
        }

        return $multiPolygon;
    }

    public function validateGeoJSON(array $geoJSON): bool
    {
        return array_key_exists('features', $geoJSON);
    }

    public function validateFeature(array $feature): bool
    {
        return array_key_exists('geometry', $feature) && in_array($feature['geometry']['type'], self::geometries) &&
            array_key_exists('properties', $feature) && array_key_exists(self::PROPERTIES_CODE_KEY, $feature['properties']);
    }

    /**
     * @param string $properties recieves feature properties
     * @return string returns polygon code
     */
    public function extractPolygonCode(array $properties): string
    {
        return isset($properties[self::PROPERTIES_CODE_KEY])?$properties[self::PROPERTIES_CODE_KEY]:"";
    }
    public function extractPolygonArea(array $properties): string
    {
        return isset($properties[self::PROPERTIES_AREA_KEY])?$properties[self::PROPERTIES_AREA_KEY]:"";
    }
    public function extractPolygonLU(array $properties): string
    {
        return isset($properties[self::PROPERTIES_LU_KEY])?$properties[self::PROPERTIES_LU_KEY]:"";
    }
    public function extractPolygon_pelak_asli(array $properties): string
    {
        return isset($properties[self::PROPERTIES_pelak_asli_KEY])?$properties[self::PROPERTIES_pelak_asli_KEY]:"";
    }
    public function extractPolygon_pelak_fare(array $properties): string
    {
        return isset($properties[self::PROPERTIES_pelak_fare_KEY])?$properties[self::PROPERTIES_pelak_fare_KEY]:"";
    }
}
