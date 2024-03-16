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

	public function getDataDeal(int $id, string $entity)
	{
		return $this->ModelBitrix->dataOfEntity($id, $entity);
	}
	public function getDataContact(int $id, string $entity)
	{
		return $this->ModelBitrix->dataOfEntity($id, $entity);
	}
	public function getDataCompany(int $id, string $entity)
	{
		return $this->ModelBitrix->dataOfEntity($id, $entity);
	}
}
