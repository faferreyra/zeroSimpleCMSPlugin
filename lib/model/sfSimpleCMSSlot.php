<?php

/**
 * Subclass for representing a row from the 'sf_simple_cms_slot' table.
 *
 * 
 *
 * @package plugins.sfSimpleCMSPlugin.lib.model
 */
class sfSimpleCMSSlot extends BasesfSimpleCMSSlot
{
	/* 
	 * @returns zeroSimpleCMSSlotType
	 */
	public function getSlotType()
	{

		$slotTypeClass = 'zeroSimpleCMS' . ucfirst($this->getType()) . 'Slot';
		
		$slotType = new $slotTypeClass;
		
		$slotType->setName( $this->getName() );
		$slotType->setValue( $this->getValue() );
		
		return $slotType;
	}
}
