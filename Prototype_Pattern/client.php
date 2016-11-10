<?php

require_once "./User.php";

$hello = new User("hello");
var_dump($hello->getUserName());

$world = clone $hello;

var_dump($world->getUserName()); // hello

$world->setUserName("world");

//浅复制
var_dump($hello === $world); // false
var_dump($hello->getUserName()); // hello
var_dump($world->getUserName()); // world


//浅复制
$c = $hello;
$c->setUserName("c");
var_dump($hello->getUserName());
