<?php
require_once "./LazySingleton.php";

$singleton = LazySingleton::getInstance();

var_dump($singleton === LazySingleton::getInstance());
