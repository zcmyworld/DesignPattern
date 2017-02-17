<?php
require_once './PhoneM.php';
class PhoneMwithEmail extends PhoneM
{
    public function email()
    {
        var_dump("Phone M will send an email");
    }
}