<?php
require_once "./ICarFactory.php";
require_once "./Engine.php";
require_once "./Wheel.php";
require_once "./Car.php";

class CarFactory implements ICarFactory
{
    public function createCar()
    {
        $wheel = new Wheel();
        $engine = new Engine();
        $car = new Car();
        $car->setEngine($engine);
        $car->setWheel($wheel);
        return $car;
    }
}