<?php

require_once "./AbstractShape.php";

class Rectangle extends AbstractShape
{
    public function draw($color)
    {
        var_dump("draw a rectangle ..");
        $color->show();
    }
}

