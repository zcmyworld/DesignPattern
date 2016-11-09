<?php
require_once "./Hero.php";
class HeroShooter extends Hero
{
    //Override
    public function setGun() {
        parent::setGun();
        echo "提起枪进行射击\n";
    }
}
