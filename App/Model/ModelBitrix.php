<?php

namespace Asesores\Model;

use Asesores\core\CRest;

class ModelBitrix
{
    protected function dataOfEntity(int $id, string $entity)
    {
        $result = CRest::call(
            "crm.$entity.get",
            [
                "id" => $id,
            ]
        );
        return $result["result"];
    }
    protected function dataFields(string $FIELD_NAME)
    {

        $result = CRest::call(
            "crm.company.userfield.list",
            [
                "FILTER[FIELD_NAME]" => $FIELD_NAME,
            ]
        );
        return $result["result"][0]["LIST"];
    }
}
