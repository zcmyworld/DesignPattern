<?php
require_once "./ICarFactory.php";
require_once "./Car.php";

class CarFactory implements ICarFactory
{
    public function createCar()
    {
        $car = new Car();
        return $car;
    }
}