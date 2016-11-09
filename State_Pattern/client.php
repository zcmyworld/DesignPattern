<?php

require_once "./Context.php";
require_once "./Poweron.php";
require_once "./Poweroff.php";

$poweron = new Poweron();

$poweroff = new Poweroff();

$context = new Context();

$context->setState($poweron);
$context->doAction();

$context->setState($poweroff);
$context->doAction();


