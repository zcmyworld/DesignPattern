<?php
require_once "./Engine.php";

class EngineBuilder
{
    public function getEngine()
    {
        return new Engine();
    }
}