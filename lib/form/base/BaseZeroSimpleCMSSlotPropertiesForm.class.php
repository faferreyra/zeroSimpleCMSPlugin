<?php

/**
 * Description of BaseZeroSimpleCMSSlotPropertiesForm
 *
 * @author fabian
 */
class BaseZeroSimpleCMSSlotPropertiesForm extends sfForm
{
	/* @var $slot zeroSimpleCMSSlotType */
	private $slot;

	/* @var $page sfSimpleCMSPage */
	private $page;

	public function __construct(zeroSimpleCMSSlotType $slot, sfSimpleCMSPage $page, $defaults = array(), $options = array(), $CSRFSecret = null)
	{
		$this->slot = $slot;
		$this->page = $page;
		parent::__construct($defaults, $options, $CSRFSecret);
	}

	public function setup()
	{
		$slotTypes = sfConfig::get('app_zeroSimpleCMS_slotTypes', array(
			'text' => 'Raw Text',
			'richEdit' => 'Rich Text Editor'
		));

		$this->setWidgets(array(
			'type' => new sfWidgetFormChoice( array('choices' => $slotTypes, 'default' => $this->slot->getType()), array('autocomplete' => 'off')),
			'slot' => new sfWidgetFormInputHidden(array('default' => $this->slot->getName()), array()),
			'page' => new sfWidgetFormInputHidden(array('default' => $this->page->getSlug()), array())
		));

		$this->getWidgetSchema()->setLabels(array(
			'type' => 'Slot Type'
		));

		$this->getWidgetSchema()->setNameFormat('slot[%s]');
	}
}