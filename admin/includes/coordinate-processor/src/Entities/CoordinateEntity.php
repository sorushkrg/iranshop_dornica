<?php

namespace Redcoder\CoordinateProcessor\Entities;
use Exception;

class CoordinateEntity {
    public float $latitude;
    public float $longitude;

    public function __construct(float $latitude, float $longitude) {
        if(!validateCoordinates($latitude, $longitude))
            throw new Exception('Invalid coordinates !');

        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function toUTM(): UTMEntity {
        $utm = ll2utm($this->latitude, $this->longitude);
        return new UTMEntity($utm[0], $utm[1], $utm[2]);
    }
}