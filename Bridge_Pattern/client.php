<?php

require_once "./Red.php";
require_once "./Black.php";
require_once "./Green.php";
require_once "./Rectangle.php";
require_once "./Circle.php";

$rectangle = new Rectangle();

$circle = new Circle();

$rectangle->draw(new Red());
$rectangle->draw(new Green());


$circle->draw(new Black());
