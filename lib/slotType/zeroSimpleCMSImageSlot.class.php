<?php

/**
 * Description of zeroSimpleCMSImageSlot
 *
 * @author fabian
 */
class zeroSimpleCMSImageSlot extends zeroSimpleCMSSlotType
{

	public function getEditingForm()
	{
		$form = new sfForm();

		$formValues = sfYaml::load($this->value);

		$form->setDefaults($formValues);

		$form->setWidgets(array(
			'image' => new sfWidgetFormInputMediaBrowser(array(), array('size' => 60)),
			'width' => new sfWidgetFormInput(array(), array('size' => 5)),
			'height' => new sfWidgetFormInput(array(), array('size' => 5)),
			'title' => new sfWidgetFormInput(array(), array('size' => 40)),
			'longdesc' => new sfWidgetFormTextarea(array(), array('rows' => 5, 'cols' => 50)),
			'link' => new sfWidgetFormInput(array(), array('size' => 40)),
			'target' => new sfWidgetFormChoice(array(
				'choices' => array('_blank' => 'New Window', '_self' => 'Same window'),
				'default' => '_self'
					), array())
		));

		$form->getWidgetSchema()->setNameFormat('slotEditor[%s]');
		$form->getWidgetSchema()->setFormFormatterName('SlotEditor');

		return $form;
	}

	public function getType()
	{
		return 'image';
	}

	public function getValue()
	{
		$value = "[ Double Click to Edit ]";

		if (isset($this->value))
		{
			$parameters = sfYaml::load($this->value);

			if (isset($parameters['image']))
			{

				$configuration = sfContext::getInstance()->getConfiguration();
				$configuration->loadHelpers('Text', 'Tag');

				$imageOptions = $parameters;
				unset($imageOptions['link'], $imageOptions['target'], $imageOptions['image']);

				$value = image_tag($parameters['image'], $imageOptions);

				if (isset($parameters['link']) && trim($parameters['link'] != '' ))
				{
					$value = sprintf('<a href="%s" target="%s">%s</a>', $parameters['link'], $parameters['target'], $value );
				}
			}
		}

		return $value;
	}

	public function serializeValue($value)
	{
		return sfYaml::dump($value);
	}
}