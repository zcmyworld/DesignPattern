<?php

require_once "./IDiscountVistor.php";

class PlusDiscount implements IDiscountVisotr
{
    public function discount($macbook)
    {
        return $macbook->getPrice() + 10;
    }
}