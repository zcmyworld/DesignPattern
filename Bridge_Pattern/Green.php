<?php

require_once "./AbstractColor.php";

class Green extends AbstractColor
{
    public function show()
    {
        var_dump("Color green .. ");
    }
}