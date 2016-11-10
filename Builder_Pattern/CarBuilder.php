<?php

require_once "./Car.php";

class CarBuilder
{
    public function getCar($engine, $wheel)
    {
        return new Car($engine, $wheel);
    }
}