<?php

require_once "./SmallWheel.php";
require_once "./BigWheel.php";

class WheelBuilder
{
    public function getWheel($carType)
    {
        if ($carType == "big") {
            return new BigWheel();
        }
        if ($carType == "small") {
            return new SmallWheel();
        }
    }
}