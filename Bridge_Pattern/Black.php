<?php

require_once "./AbstractColor.php";

class Black extends AbstractColor
{
    public function show()
    {
        var_dump("Color black ..");
    }
}