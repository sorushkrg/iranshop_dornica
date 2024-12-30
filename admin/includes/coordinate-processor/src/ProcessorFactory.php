<?php

namespace Redcoder\CoordinateProcessor;
use InvalidArgumentException;

class ProcessorFactory {
    public static function create($driver) {
        switch($driver) {
            case 'geojson':
                return new GeoJSONProcessor();
            case 'kml':
                return new KMLProcessor();
            case 'kmz':
                return new KMZProcessor();
            default:
                throw new InvalidArgumentException("Driver $driver is not supported");
        }
    }
}