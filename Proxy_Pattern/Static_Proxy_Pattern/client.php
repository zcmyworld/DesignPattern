<?php
require ('./ProxyPlayer.php');
require ('./Player.php');

$player = new Player("hello");

$proxyPlayer = new ProxyPlayer("proxy", $player);
//
$proxyPlayer->login();
$proxyPlayer->kill();
$proxyPlayer->upgrade();
