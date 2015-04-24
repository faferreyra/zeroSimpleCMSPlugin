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

    /**
     * @param sfSimpleCMSPage $page
     * @param $name
     * @param string $culture
     * @param string $slotType
     * @return sfSimpleCMSSlot
     * @throws PropelException
     */
    public static function getOrCreate(sfSimpleCMSPage $page, $name, $culture = 'es', $slotType = 'Html')
    {
        $slot = sfSimpleCMSSlotQuery::create()
            ->filterBysfSimpleCMSPage($page)
            ->filterByName($name)
            ->filterByCulture($culture)
            ->findOne();

        if ($slot == null) {
            $slot = new sfSimpleCMSSlot();
            $slot->setsfSimpleCMSPage($page);
            $slot->setCulture($culture);
            $slot->setName($name);
            $slot->setType($slotType);
        }

        return $slot;
    }
}
