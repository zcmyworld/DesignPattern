<?php
require('./DynamicProxy.php');
require ('./Player.php');

$player = new Player("hello");

$proxyPlayer = new DynamicProxy($player);

$proxyPlayer->login(time());
$proxyPlayer->kill();
$proxyPlayer->upgrade();
