<?php
require_once(__DIR__ . '\vendor\autoload.php');

use Asesores\controllers\BitrixController;
use Asesores\controllers\helpers;

$BitrixController = new BitrixController;
$helpers = new helpers;
$data = $BitrixController->getData($_REQUEST["idDeal"], "deal");
$helpers->FormatPrint($data);
