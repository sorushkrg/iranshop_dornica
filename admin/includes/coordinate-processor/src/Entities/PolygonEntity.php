<?php

namespace Redcoder\CoordinateProcessor\Entities;

use InvalidArgumentException;

class PolygonEntity
{
    public string $code;
    public string $area;
    public string $lu;
    public string $pelak_asli;
    public string $pelak_fare;
    public array $points = [];

    public function __construct(string $code,string $area,string $lu,string $pelak_asli,string $pelak_fare, array $points = [])
    {
        $this->code = $code;
        $this->area = $area;
        $this->pelak_asli = $pelak_asli;
        $this->pelak_fare = $pelak_fare;
        $this->lu = $lu;

        foreach ($points as $point) {
            if (!$point instanceof CoordinateEntity)
                throw new InvalidArgumentException("Point should be an instance of UTMEntity !");
        }

        $this->points = $points;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }
    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area): void
    {
        $this->code = $area;
    }
    public function getLU(): string
    {
        return $this->lu;
    }
    public function setLU(string $lu): void
    {
        $this->code = $lu;
    }
    public function setpelak_data(string $pelak_asli,string $pelak_fare): void
    {
        $this->pelak_asli = $pelak_asli;
        $this->pelak_fare = $pelak_fare;
    }
    public function getpelak_asli(): string
    {
        return $this->pelak_asli;
    }
    public function getpelak_fare(): string
    {
        return $this->pelak_fare;
    }
    public function addPoint(CoordinateEntity $point): int
    {
        $this->points[] = $point;
        return count($this->points) - 1;
    }

    public function getPoints(): array
    {
        return $this->points;
    }

    public function getPoint(int $key): CoordinateEntity
    {
        if (!array_key_exists($key, $this->points))
            throw new InvalidArgumentException("Key does not exist !");

        return $this->points[$key];
    }

    public function removePoint(int $key)
    {
        if (!array_key_exists($key, $this->points))
            throw new InvalidArgumentException("Key does not exist !");

        unset($this->points[$key]);
    }
}
