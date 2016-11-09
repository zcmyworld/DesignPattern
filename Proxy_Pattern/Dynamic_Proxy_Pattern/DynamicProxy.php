<?php

class DynamicProxy
{
    private $owner = null;

    function __construct($owner)
    {
        $this->owner = $owner;
    }

    public function __call($name, $arguments)
    {
        call_user_func_array(array($this->owner, $name), $arguments);
    }
}
