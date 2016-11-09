<?php
require_once "./Hero.php";

abstract class HeroDecorator extends Hero
{
    protected $hero = null;

    function __construct($hero)
    {
        $this->hero = $hero;

    }

    public function wear()
    {
        $this->hero->wear();
    }
}
