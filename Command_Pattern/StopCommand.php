<?php
//ConcreteCommand
require_once './ICommand.php';
class StopCommand implements ICommand
{
    private $audioPlayer = null;

    function __construct($audioPlayer)
    {
        $this->audioPlayer = $audioPlayer;
    }

    public function execute()
    {
        $this->audioPlayer->stop();
    }
}
