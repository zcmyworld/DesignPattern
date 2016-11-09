<?php
require_once "./AddOperation.php";
require_once "./DelOperation.php";
require_once "./OperationContext.php";

$numA = 10;
$numB = 5;

$operationContext = new OperationContext(new AddOperation());
$operationContext->setNumA($numA);
$operationContext->setNumB($numB);
$operationContext->doOperation();

$operationContext = new OperationContext(new DelOperation());
$operationContext->setNumA($numA);
$operationContext->setNumB($numB);
$operationContext->doOperation();


