<?php
require_once "./Timer.php";
require_once "./AdapterTimer.php";


$adapterTimer = new AdapterTimer(new Timer());

echo $adapterTimer->getTime();
echo "\n";