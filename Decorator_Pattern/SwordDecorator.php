<?php
require_once "./HeroDecorator.php";

class SwordDecorator extends HeroDecorator
{

    public function wear()
    {
        parent::wear();
        $this->getSword();
    }

    private function getSword()
    {
        echo "装备剑\n";
    }
}