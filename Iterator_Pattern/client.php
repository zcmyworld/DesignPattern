<?php
require_once "./Container.php";

$container = new Container();

$container->setContainer(4);
$container->setContainer(5);
$container->setContainer(6);

while ($container->iterator()->hasNext()) {
    var_dump($container->iterator()->next());
}
