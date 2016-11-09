<?php

require_once "./ToolsFactory.php";

$toolsFactory = new ToolsFactory();

$tool = $toolsFactory->getTools("one");

var_dump($tool->getToolsName());
var_dump($tool->isPowerOn());

$tool->setPowerOn();
var_dump($tool->isPowerOn());


$tool2 = $toolsFactory->getTools("one");
var_dump($tool2->isPowerOn());
