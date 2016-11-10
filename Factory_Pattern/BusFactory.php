<?php

require_once "./ICarFactory.php";
require_once "./Bus.php";

class BusFactory implements  ICarFactory
{
    public function createCar()
    {
        return new Bus();
    }
}