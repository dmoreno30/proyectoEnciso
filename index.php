<?php
require_once(__DIR__ . '\vendor\autoload.php');

use Asesores\controllers\BitrixController;
use Asesores\controllers\DataStructContronller;


try {
    $crm = new BitrixController();

    $deal =  $crm->getDataDeal($_REQUEST["idDeal"], "deal");
    $contact =  $crm->getDataDeal($_REQUEST["idContact"], "contact");
    $company =  $crm->getDataDeal($_REQUEST["idCompany"], "company");

    $structureData = new DataStructContronller($deal, $contact, $company);
} catch (\Throwable $th) {
    //throw $th;
}
