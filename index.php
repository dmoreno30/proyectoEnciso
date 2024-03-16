<?php
require_once(__DIR__ . '\App\BitrixController.php');
$logRegister = new BitrixController();
$data = $logRegister->getData($_REQUEST["idDeal"], "deal");
print_r($data);
