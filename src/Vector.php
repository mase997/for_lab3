<?php

namespace App;

class Vector
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicular(Vector $other)
    {
        return ($this->x * $other->y - $this->y * $other->x) == 0; // Векторы перпендикулярны, если их векторное произведение равно 0
    }
}
