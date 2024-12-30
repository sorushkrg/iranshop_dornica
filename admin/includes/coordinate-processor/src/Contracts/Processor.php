<?php

namespace Redcoder\CoordinateProcessor\Contracts;
use Redcoder\CoordinateProcessor\Entities\MultiPolygonEntity;

Interface Processor {
    public function process(string $file): MultiPolygonEntity;
}