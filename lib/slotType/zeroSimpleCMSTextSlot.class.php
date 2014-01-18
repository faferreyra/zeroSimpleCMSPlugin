<?php

class zeroSimpleCMSTextSlot extends zeroSimpleCMSSlotType
{
	public function getEditingForm()
	{
		$form = new sfForm();

		$widgetValue = strip_tags($this->getValue());

		$form->setWidgets(array(
			'text' => new sfWidgetFormTextarea( array('default' => $widgetValue ), array('rows' => 20, 'cols' => 60))
		));

		$form->getWidgetSchema()->setNameFormat('slotEditor[%s]');

		return $form;
	}

	public function getType()
	{
		return "text";
	}

	public function getValue()
	{
		$configuration = sfContext::getInstance()->getConfiguration();
		$configuration->loadHelpers('Text', 'Tag');
		
		$rawValue = $this->value;

		$formattedValue = strip_tags($rawValue);
		$formattedValue = simple_format_text($formattedValue);
		$formattedValue = auto_link_text($formattedValue);

		return $formattedValue;
	}

	public function serializeValue($value)
	{
		return $value['text'];
	}
}

