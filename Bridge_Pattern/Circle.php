<?php

require_once "./AbstractShape.php";

class Circle extends AbstractShape
{
    public function draw($color)
    {
        var_dump("draw a circle ..");
        $color->show();
    }
}
