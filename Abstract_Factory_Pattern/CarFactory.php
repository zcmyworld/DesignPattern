<?php
require_once "./ITrafficTool.php";
require_once "./Car.php";
require_once "./CarWheel.php";

class CarFactory implements ITrafficTool
{
    public function createTrafficTool()
    {
        return new Car();
    }

    public function createWheel()
    {
        return new CarWheel();
    }
}

