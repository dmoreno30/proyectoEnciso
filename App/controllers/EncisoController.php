<?php

namespace Asesores\controllers;

use Asesores\Model\ModelEnciso;

class EncisoController extends ModelEnciso
{

    private $url = "http://198.251.68.138:1951/api/crm/insert";
    public function __construct($json)
    {
        $res = $this->GETAPI($this->url, $json);
        //print_r($res);
    }
}
