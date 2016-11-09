<?php
require_once "./AbstractRoot.php";

class Root extends AbstractRoot
{
    public function add($item)
    {
        array_push($this->leafContainer, $item);
    }

    public function getList()
    {
        return $this->leafContainer;
    }
}

