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
        return $result;
    }
}
