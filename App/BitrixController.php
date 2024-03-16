<?php
require_once($_SERVER["DOCUMENT_ROOT"] . 'proyectoEnciso\core\crest.php');

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
