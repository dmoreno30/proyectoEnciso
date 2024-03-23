<?php
require_once(__DIR__ . '\vendor\autoload.php');

use Asesores\controllers\BitrixController;
use Asesores\controllers\DataStructContronller;


try {
    $BitrixControllerCRM = new BitrixController();

    $deal =  $BitrixControllerCRM->getDataCRM($_REQUEST["idDeal"], "deal");
    $contact =  $BitrixControllerCRM->getDataCRM($_REQUEST["idContact"], "contact");
    $company =  $BitrixControllerCRM->getDataCRM($_REQUEST["idCompany"], "company");
    $Emailuser = $_REQUEST["userEmail"];
    $datastruct = new DataStructContronller($deal, $contact, $company, $Emailuser);
} catch (\Throwable $th) {
    throw $th;
}
