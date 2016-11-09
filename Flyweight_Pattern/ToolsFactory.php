<?php

require_once "./Tools.php";

class ToolsFactory
{
    private $tools = array();

    public function getTools($key)
    {
        if (isset($this->tools[$key]))
        {
            return $this->tools[$key];
        }
        $this->tools[$key] = new Tools($key);
        return $this->tools[$key];
    }
}
