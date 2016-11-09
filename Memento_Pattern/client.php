<?php

require_once "./Caretaker.php";

require_once "./Originator.php";

$originator = new Originator();

$originator->setState("state A");

echo $originator->getState();
echo "\n";

$caretaker = new Caretaker();
$caretaker->setMemento($originator->createMemento());

$originator->setState("state B");

echo $originator->getState();
echo "\n";

$originator->restoreMemento($caretaker->getMemento());

echo $originator->getState();
echo "\n";
