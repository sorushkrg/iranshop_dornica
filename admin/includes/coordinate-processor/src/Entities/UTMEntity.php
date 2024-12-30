<?php

namespace Redcoder\CoordinateProcessor\Entities;

class UTMEntity {
    public float $xAxis;
    public float $yAxis;
    public float $zone;

    public function __construct(float $xAxis, float $yAxis, float $zone) {
        $this->xAxis = $xAxis;
        $this->yAxis = $yAxis;
        $this->zone = $zone;
    }
}