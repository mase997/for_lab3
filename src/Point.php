<?php

namespace App;

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($dx)
    {
        $this->x += $dx;
    }

    public function moveY($dy)
    {
        $this->y += $dy;
    }

    public function getCoordinates()
    {
        return [$this->x, $this->y];
    }
}