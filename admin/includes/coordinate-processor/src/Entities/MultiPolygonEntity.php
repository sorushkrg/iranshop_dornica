<?php

namespace Redcoder\CoordinateProcessor\Entities;

use InvalidArgumentException;

class MultiPolygonEntity
{
    public array $polygons = [];

    public function __construct(array $polygons = [])
    {

        foreach ($polygons as $polygon) {
            if (!$polygon instanceof PolygonEntity)
                throw new InvalidArgumentException("Polygon should be an instance of PolygonEntity !");
        }

        $this->polygons = $polygons;
    }

    public function addPolygons(array $polygons)
    {
        foreach ($polygons as $polygon) {
            if (!$polygon instanceof PolygonEntity)
                throw new InvalidArgumentException("Polygon should be an instance of PolygonEntity !");
        }

        $this->polygons = array_merge($this->polygons, $polygons);
    }

    public function addPolygon(PolygonEntity $polygon): int
    {
        $this->polygons[] = $polygon;
        return count($this->polygons) - 1;
    }

    public function getPolygons(): array
    {
        return $this->polygons;
    }

    public function getPolygon(int $key): PolygonEntity
    {
        if (!array_key_exists($key, $this->polygons))
            throw new InvalidArgumentException("Key does not exist !");

        return $this->polygons[$key];
    }

    public function removePolygon(int $key)
    {
        if (!array_key_exists($key, $this->polygons))
            throw new InvalidArgumentException("Key does not exist !");

        unset($this->polygons[$key]);
    }
}
