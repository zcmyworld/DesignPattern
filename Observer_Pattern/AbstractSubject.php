<?php
abstract class AbstractSubject
{
    protected $observerList = array();

    public function setObserver($observer)
    {
        array_push($this->observerList, $observer);
    }

    public function notifyAllObserver()
    {
        foreach ($this->observerList as $key => $val) {
            $val->update();
        }
    }
}