<?php
require_once('./AbstractPlayer.php');

class Player extends AbstractPlayer
{
    public function kill()
    {
        echo 'player kill' ;
        echo "\n";
    }
    
    public function upgrade()
    {
        echo 'player upgrade' ;
        echo "\n";
    }
    
    public function login()
    {
        echo 'player login' ;
        echo "\n";
    }

}
