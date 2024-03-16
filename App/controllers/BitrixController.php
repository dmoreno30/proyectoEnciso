<?php

namespace Asesores\controllers;

use Asesores\core\CRest;

class BitrixController
{
	protected function dataOFEntity($id, $entity)
	{
		$result = CRest::call(
			"crm.$entity.get",
			[
				"id" => $id,
			]
		);
		return $result;
	}
	public function getData($id, $entity)
	{
		return $this->dataOFEntity($id, $entity);
	}
}
