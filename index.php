<?php
require_once (__DIR__.'\core\crest.php');
require_once (__DIR__.'\App\helpers.php');
echo __DIR__;
$logRegister = new LogRegister();
$logRegister->register($_REQUEST);








