<?php

namespace Asesores\controllers;

use Asesores\Model\ModelBitrix;

class BitrixController extends ModelBitrix
{
	public $ModelBitrix;
	public $id;
	public $entity;

	public function __construct()
	{

		$this->ModelBitrix = new ModelBitrix();
	}

	public function getDataCRM(int $id, string $entity)
	{
		return $this->ModelBitrix->dataOfEntity($id, $entity);
	}

	public function infoField($FIELD_NAME)
	{
		return $this->dataFields($FIELD_NAME);
	}
}
