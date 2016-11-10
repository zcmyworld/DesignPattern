<?php

require_once "./JSProgramer.php";

require_once "./PHPProgramer.php";

$JSer = new JSProgramer();
$JSer->setImage("jsImage");
$JSer->setName("JSer");
$JSer->show();

$PHPer = new PHPProgramer();
$PHPer->setImage("phpImage");
$PHPer->setName("PHPer");
$PHPer->show();


