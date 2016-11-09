<?php
require('./User.php');
require('./Chatroom.php');

$hello = new User('hello');
$world = new User('world');


$chatroom = new Chatroom();

$chatroom->setUserGroup($hello);
$chatroom->setUserGroup($world);

$hello->setChatRoom($chatroom);
$world->setChatRoom($chatroom);

$hello->sendMsg("helloworld");
