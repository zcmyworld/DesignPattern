<?php

class Macbook
{
    private $price = 1300;

    public function getPrice()
    {
        return $this->price;
    }

    //　这里可以处理处理受访者的属性或者调用其方法
    public function accept($vistor)
    {
        return $vistor->discount($this);
    }
    
}