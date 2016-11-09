<?php
require_once "./AbstractObserver.php";
class ObserverOne extends AbstractObserver
{
    public function update()
    {
        echo "ObserverOne notify\n";
    }
}