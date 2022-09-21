<?php

class Figure
{
    public int $shape_type, $color, $x, $y;

    function __construct(int $num)
    {
        $this->shape_type = ($num & 2) >> 1;
        $this->color      = ($num & 3) >> 0;
        $this->x          = ($num & 4) >> 2;
        $this->y          = ($num & 8) >> 3;
    }
}
