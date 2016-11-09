<?php
require_once('./AbstractPlayer.php');
//require('./Player.php');

class ProxyPlayer extends AbstractPlayer
{
    private $player = null;
    function __construct($playerName, $player)
    {
        parent::__construct($playerName);
        $this->player = $player;
    }

    public function kill()
    {
        $this->player->kill();
    }

    public function upgrade()
    {
        $this->player->upgrade();
    }

    public function login()
    {
        echo "user login, I will send a message!";
        echo "\n";
        $this->player->login();
    }

}
