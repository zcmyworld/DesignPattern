<?php
require_once "./ITrafficTool.php";
require_once "./Airplane.php";
require_once "./AirplaneWheel.php";

class AirplaneFactory implements ITrafficTool
{
    public function createTrafficTool()
    {
        return new Airplane();
    }
    
    public function createWheel()
    {
        return new AirplaneWheel();
    }
}