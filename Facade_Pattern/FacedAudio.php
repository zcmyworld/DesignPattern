<?php

require_once "./Auido.php";
require_once "./Power.php";

class FacedAudio
{
    private $Audio = null;
    private $Power = null;

    function __construct()
    {
        $this->Audio = new Audio();
        $this->Power = new Power();
    }

    public function playAuido()
    {
        $this->Power->turn_on();
        $this->Audio->play();
    }
}

