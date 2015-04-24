<?php

/**
 * Description of zeroSimpleCMSRichEditSlot
 *
 * @author fabian
 */
class zeroSimpleCMSRichEditSlot extends zeroSimpleCMSTextSlot
{

	public function getEditingForm()
	{
		$form = new sfForm();

		$defaultValue = $this->value;

		$form->setWidgets(array(			
			'text' => new sfWidgetFormTextarea(array('default' => $defaultValue), array('class' => 'rich-text-editor', 'autocomplete' => 'off'))
		));

		$form->getWidgetSchema()->setNameFormat('slotEditor[%s]');
		$form->getWidgetSchema()->setFormFormatterName('list');

		return $form;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function getType()
	{
		return 'richEdit';
	}

    public function setValue($value)
    {
        $serializedValue = json_decode($value, true);
        $this->value = $serializedValue['html'];
    }

}