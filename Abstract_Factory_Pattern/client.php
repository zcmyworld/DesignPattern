<?php
// 一个工厂生产同一类产品，产品之间具有关联关系

// 飞机的轮胎只能组装在飞机，车的轮胎只能组装在车，交通工具与轮胎之间存在强关系

require_once "./AirplaneFactory.php";
require_once "./CarFactory.php";

$airplaneFactory = new AirplaneFactory();
$carFactory = new CarFactory();

$trafficTool = $airplaneFactory->createTrafficTool();
$backupWheel = $airplaneFactory->createWheel();

$trafficTool = $carFactory->createTrafficTool();
$backupWheel = $carFactory->createWheel();