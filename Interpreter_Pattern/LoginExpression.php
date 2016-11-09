<?php

require_once "./Expression.php";

class LoginExpress implements Expression
{
    public function interpret($context)
    {
        echo "handling .. \n";
        echo $context;
        echo "\n";
    }
}
