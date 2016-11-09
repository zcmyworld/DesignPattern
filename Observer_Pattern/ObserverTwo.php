<?php
require_once "./AbstractObserver.php";
class ObserverTwo extends AbstractObserver
{
    public function update()
    {
        echo "ObserverTwo notify\n";
    }
}