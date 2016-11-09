<?php

require_once "./AbstractColor.php";

class Red extends AbstractColor
{
    public function show()
    {
        var_dump("Color red ..");
    }
}