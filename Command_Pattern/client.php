<?php
require_once ('./AudioPlayer.php');
require_once ('./PlayCommand.php');
require_once ('./StopCommand.php');
require_once ('./Keyboard.php');
require_once ('./Power.php');

$audioPlayer = new AudioPlayer();

$power = new Power();

//$audioPlayer->play();

$playCommand = new PlayCommand($audioPlayer, $power);
$stopCommand = new StopCommand($audioPlayer);

$keyboard = new Keyboard();
$keyboard->setPlayCommand($playCommand);
$keyboard->setStopCommand($stopCommand);

$keyboard->play();
$keyboard->stop();


