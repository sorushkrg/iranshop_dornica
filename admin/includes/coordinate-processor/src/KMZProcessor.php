<?php

namespace Redcoder\CoordinateProcessor;

use ZipArchive;
use Redcoder\CoordinateProcessor\Contracts\Processor;
use Redcoder\CoordinateProcessor\Exceptions\FileProcessingException;
use Redcoder\CoordinateProcessor\Entities\MultiPolygonEntity;

class KMZProcessor implements Processor
{
    public KMLProcessor $kmlProcessor;

    public function __construct()
    {
        // Instantiate the KMLProcessor for further processing
        $this->kmlProcessor = ProcessorFactory::create('kml');
    }

    public function process(string $file): MultiPolygonEntity
    {
        // Check if the file exists
        if (!file_exists($file))
            throw new FileProcessingException("File not found : $file");

        // Open the provided file as a ZIP archive
        $zip = new ZipArchive();
        if (!$zip->open($file))
            throw new FileProcessingException("Failed to Open KMZ File : $file");

        // Create a temporary directory to extract KML files
        $tempDirectory = $this->createTemporaryDirectory();

        // Get the list of KML files from the ZIP archive
        $kmlFiles = $this->getKmlFiles($zip);

        // Extract KML files from the ZIP archive to the temporary directory
        $zip->extractTo($tempDirectory, $kmlFiles);

        // Close zip to free up memory
        $zip->close();

        return $this->processKMLFiles($kmlFiles, $tempDirectory);
    }

    public function processKMLFiles(array $kmlFiles, string $tempDirectory)
    {
        // Initialize a MultiPolygonEntity to store processed polygons
        $multiPolygon = new MultiPolygonEntity();

        // Process each extracted KML file and add polygons to MultiPolygonEntity
        foreach ($kmlFiles as $kmlFile) {
            $fullPath = "$tempDirectory/$kmlFile";

            try {
                $multiPolygon->addPolygons($this->kmlProcessor->process($fullPath)->getPolygons());
            } catch (FileProcessingException $e) {
                deleteDirectory($tempDirectory);

                throw new FileProcessingException("Failed to Process $kmlFile KML File : " . $e->getMessage());
            }
        }

        // Remove the temporary directory with it's files after processing
        deleteDirectory($tempDirectory);

        return $multiPolygon;
    }

    public function createTemporaryDirectory(): string
    {
        $tempDirectory = sys_get_temp_dir() . "/kml_files_" . uniqid();
        if (!mkdir($tempDirectory, 0700))
            throw new FileProcessingException("Failed to Create Temp Folder : $tempDirectory");

        return $tempDirectory;
    }

    /**
     * Retrieve an array of KML filenames from the provided ZipArchive
     * @param ZipArchive $zip
     * @return array
     */
    public function getKmlFiles(ZipArchive $zip): array
    {
        $kmlFiles = [];

        // Iterate through the files in the ZIP archive
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $filename = $zip->getNameIndex($i);
            // Check if the file matches the KML file pattern and add it to the list
            if (preg_match("/[\w()-]+\.kml$/", $filename)) {
                $kmlFiles[] = $filename;
            }
        }

        return $kmlFiles;
    }
}
