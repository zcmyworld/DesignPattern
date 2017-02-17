<?php

require_once "./AbstractPhone.php";

class PhoneMwithSMS extends  AbstractPhone
{
    public function sms()
    {
        var_dump("Phone M will send an sms");
    }
}
