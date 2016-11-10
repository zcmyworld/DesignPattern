<?php
require_once "./CarDirector.php";

$carDirectory = new CarDirectory();

$car = $carDirectory->getBigCar();
$car->getName();
