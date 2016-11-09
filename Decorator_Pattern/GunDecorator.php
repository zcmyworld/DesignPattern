<?php
require_once "./HeroDecorator.php";

class GunDecorator extends HeroDecorator
{

    private function getGun()
    {
        echo "装备枪\n";
    }
    
    public function wear()
    {
        parent::wear();
        $this->getGun();
    }
}
