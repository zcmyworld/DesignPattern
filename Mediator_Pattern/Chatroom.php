<?php

require('./AbstractMediator.php');
class Chatroom extends AbstractMediator
{
    public function toAll($msg)
    {
        foreach ($this->userGroup as $key => $val) {
            $val->getMsg($msg);
        }
    }
}
