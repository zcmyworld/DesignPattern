<?php

require_once "./IDiscountVistor.php";

class SubDiscount implements IDiscountVisotr
{
    public function discount($macbook)
    {
        return $macbook->getPrice() -  10;
    }
}