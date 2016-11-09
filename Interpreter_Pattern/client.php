<?php

require_once "./LoginExpression.php";

$str = "user_admin＿passport_admin";

$loginExpression = new LoginExpress();

$loginExpression->interpret($str);

