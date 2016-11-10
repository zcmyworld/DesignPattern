<?php

require_once "./AbstractResume.php";

//JavaScript　程序员的简历
class JSProgramer extends AbstractResume
{
    public function setContent()
    {
        //new HTMLCode();
        echo "附上一段html代码\n";
    }
}