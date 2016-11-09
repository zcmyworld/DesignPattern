<?php
// ConcreteCommand
require_once './ICommand.php';
class PlayCommand implements ICommand
{
    private $audioPlayer = null;

    private $power = null;
    
    function __construct($audioPlayer, $power)
    {
        $this->audioPlayer = $audioPlayer;
        $this->power = $power;
    }

    // 如果打开播放器还需要其他操作，比如说通电？插入磁带？也在这里执行
    public function execute()
    {
        $this->power->turn_on();
        //封装多个命令
        $this->audioPlayer->play();
    }
}
