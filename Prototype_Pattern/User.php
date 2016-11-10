<?php

class User
{
    private $userName = null;

    public function getUserName()
    {
        return $this->userName;
    }

    function __construct($userName)
    {
        $this->userName = $userName;
    }

    function setUserName($userName)
    {
        $this->userName = $userName;
    }



    public function __clone()
    {
        var_dump("aha?");

    }
}