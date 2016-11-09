<?php
require_once "./ObserverOne.php";
require_once "./ObserverTwo.php";

require_once "./Subject.php";

$subject = new Subject();

$observerOne = new ObserverOne();
$observerTwo = new ObserverTwo();

$subject->setObserver($observerOne);
$subject->setObserver($observerTwo);



$subject->notifyAllObserver();