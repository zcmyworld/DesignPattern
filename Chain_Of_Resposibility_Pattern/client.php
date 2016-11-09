<?php

require_once "./InfoLogger.php";
require_once "./ErrorLogger.php";
require_once "./DebugLogger.php";

$infoLogger = new InfoLogger();
$errorLogger = new ErrorLogger();
$debugLogger = new DebugLogger();

$infoLogger->setNextLogger($debugLogger);
$debugLogger->setNextLogger($errorLogger);

$infoLogger->logMessage(1);
$infoLogger->logMessage(2);
$infoLogger->logMessage(3);
