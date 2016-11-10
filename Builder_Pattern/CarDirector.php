<?php

require_once "./WheelBuilder.php";
require_once "./CarBuilder.php";
require_once "./EngineBuilder.php";

class CarDirectory
{
    public function getBigCar()
    {
        $wheelBuilder = new WheelBuilder();
        $wheel = $wheelBuilder->getWheel("big");
        $engineBuilder = new EngineBuilder();
        $engine = $engineBuilder->getEngine();
        $carBuilder = new CarBuilder();
        $car = $carBuilder->getCar($engine, $wheel);
        return $car;
    }

    public function getSmallCar()
    {
        $wheelBuilder = new WheelBuilder();
        $wheel = $wheelBuilder->getWheel("small");
        $engineBuilder = new EngineBuilder();
        $engine = $engineBuilder->getEngine();
        $carBuilder = new CarBuilder();
        $car = $carBuilder->getCar($engine, $wheel);
        return $car;
    }
}
