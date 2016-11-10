<?php

require_once "./AbstractResume.php";

//php　程序员的简历
class PHPProgramer extends  AbstractResume
{
    public function setContent()
    {
        //new PHPIsTheBest();
        echo "说出PHP是世界上最好的语言\n";
    }
}