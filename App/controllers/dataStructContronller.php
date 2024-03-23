<?php

namespace Asesores\controllers;

use Asesores\controllers\BitrixController;
use Asesores\controllers\EncisoController;
use Asesores\controllers\helpers;


class DataStructContronller extends BitrixController
{
    private $modelBitrix;
    public function __construct($deal, $contact, $company, $emailuser)
    {
        $pais = $this->FieldsValue($company["UF_CRM_1709738994"], "UF_CRM_1709738994");
        $ciudad = $this->FieldsValue($company["UF_CRM_1709739074"], "UF_CRM_1709739074");
        $estado = $this->FieldsValue($company["UF_CRM_1710603546019"], "UF_CRM_1710603546019");
        $municipio = $this->FieldsValue($company["UF_CRM_1709739015"], "UF_CRM_1709739015");
        $localidad = $this->FieldsValue($company["UF_CRM_1709739040"], "UF_CRM_1709739040");
        $colonia = $this->FieldsValue($company["UF_CRM_1709739055"], "UF_CRM_1709739055");


        $body = [
            "usuario" => $emailuser,
            "id_compania_bit" => intval($company["ID"]),
            "compania" => $company["TITLE"],
            "rfc" => $company["UF_CRM_1709738143"],
            "curp" => $company["UF_CRM_1709738161"],
            "calle" => $company["UF_CRM_1709738179"],
            "num_ext" => $company["UF_CRM_1709738199"],
            "num_int" => $company["UF_CRM_1709738220"],
            "ciudad" => $ciudad,
            "cp" => $company["UF_CRM_1709738275"],
            "pais" => $pais,
            "estado" => $estado,
            "municipio" => $municipio,
            "localidad" => $localidad,
            "colonia" => $colonia,
            "latitud" => $company["UF_CRM_1711203836"],
            "longitud" => $company["UF_CRM_1709739220"],
            "altitud" => $company["UF_CRM_1709739237"],
            "pag_web" => $company["UF_CRM_1709738220"],
            "red_soc" => $company["UF_CRM_1709738220"],
            "sucursales" => $company["UF_CRM_1709739288"],
            "inactivo" => $this->formatDate($company["UF_CRM_1711223990"]),
            "id_negociacion_bit" => intval($deal["ID"]),
            "id_eta_opc" => intval(5),
            "negociacion" => $deal["TITLE"],
            "inicio" =>  $this->formatDate($deal["BEGINDATE"]),
            "fec_est_cier" =>  $this->formatDate($deal["CLOSEDATE"]),
            "id_contacto_bit" => intval($contact["ID"]),
            "nombres" => $contact["NAME"],
            "apellidos" => $contact["LAST_NAME"],
            "puesto" => $contact["POST"],
            "telefono1" => $contact["PHONE"][0]["VALUE"],
            "telefono2" => $contact["PHONE"][1]["VALUE"],
            "correo1" => $contact["EMAIL"][0]["VALUE"],
            "correo2" => $contact["EMAIL"][1]["VALUE"],

        ];
        $bdta =  $this->TransformData($body);
        $enciso =  new EncisoController($bdta);
        echo "<pre>";
        print_r($bdta);
        echo "</pre>";
    }
    private function TransformData(array $arr)
    {
        return json_encode($arr);
    }
    private function FieldsValue($FIELD_ID, string $FIELD_NAME)
    {
        $this->modelBitrix = new BitrixController();
        $fielData = $this->modelBitrix->infoField($FIELD_NAME);
        foreach ($fielData as $data) {
            if ($data["ID"] == $FIELD_ID) {
                return $data["VALUE"];
            }
        }
    }
    public function formatDate($date)
    {
        try {
            $newdate = new \DateTime($date);
            $fecha = $newdate->format('Y-m-d H-m-s');
            return $fecha;
        } catch (\Exception $e) {
            // Manejar la excepción si ocurre
            echo 'Error: ' . $e->getMessage();
            return "hola";
        }
    }
}
