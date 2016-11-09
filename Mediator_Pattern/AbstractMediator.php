<?php
abstract class AbstractMediator
{
    protected $userGroup = array();

    public function setUserGroup($user) {
        array_push($this->userGroup, $user);
    }

    public function getAllUser() {
        var_dump($this->userGroup);
    }

    abstract public function toAll($msg);

}
