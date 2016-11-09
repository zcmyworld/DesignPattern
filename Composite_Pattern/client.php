<?php
require_once "./Root.php";

$root1 = new Root("1");

$root1_1 = new Root("1_1");
$root1_2 = new Root("1_2");
$root1_3 = new Root("1_3");


$root1_1_1 = new Root("1_1_1");
$root1_1_2 = new Root("1_1_2");
$root1_1_3 = new Root("1_1_3");


$root1_2_1 = new Root("1_2_1");
$root1_2_2 = new Root("1_2_2");

$root1->add($root1_1);
$root1->add($root1_2);
$root1->add($root1_3);

$root1_1->add($root1_1_1);
$root1_1->add($root1_1_2);
$root1_1->add($root1_1_3);

$root1_2->add($root1_2_1);
$root1_2->add($root1_2_2);


function scan($root)
{
    $scanRoot = $root;
    echo $scanRoot->getRootName() . "\n";
    foreach ($scanRoot->getList() as $key => $val) {
        $scanRoot = $val;
        scan($scanRoot);
    }
}

scan($root1);

