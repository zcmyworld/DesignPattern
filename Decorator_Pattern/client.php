<?php
require_once "./GunDecorator.php";
require_once "./SwordDecorator.php";
require_once "./Shooter.php";
require_once "./Swordsman.php";

$hello = new GunDecorator(new Shooter());
$world = new SwordDecorator($hello);

$world->wear();

