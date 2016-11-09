<?php
class User
{
    private $userName = null;
    private $chatroom = null;

    function __construct($userName)
    {
        $this->userName = $userName;
    }
    
    public function getUserName() {
        echo $this->userName;
        echo "\n";
    }

    public function getMsg($msg) {
        echo $this->userName . '收到信息' . $msg;
        echo "\n";
    }

    public function sendMsg($msg) {
       $this->chatroom->toAll($msg);
    }

    public function setChatRoom($chatroom) {
       $this->chatroom = $chatroom;
    }
}

