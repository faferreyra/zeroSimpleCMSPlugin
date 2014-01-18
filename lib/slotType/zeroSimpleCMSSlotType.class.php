<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author fabian
 */
abstract class zeroSimpleCMSSlotType
{
	protected $value = array();
	protected $name = "";
	
	abstract public function getType();

	abstract public function getEditingForm();

	abstract public function getValue();

	abstract public function serializeValue($value);

	/**
	 * Setea el valor del slot desde la base de datos
	 * @param Mixed $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}