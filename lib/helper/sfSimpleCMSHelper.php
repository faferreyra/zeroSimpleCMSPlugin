<?php

use_helper('jQuery', 'I18N');

function include_editor_tools($page, $pageForm = null, $createForm = null)
{
	use_stylesheet('/zeroSimpleCMSPlugin/css/CMSEditorTools.css');
	include_component('zeroSimpleCMSAdmin', 'editorTools', array('page' => $page, 'pageForm' => $pageForm, 'createForm' => $createForm ));
}

function sf_simple_cms_has_slot($page, $slot_name)
{
	$request = sfContext::getInstance()->getRequest();
	if ($request->getParameter('edit') == 'true' && !$request->getParameter('preview'))
	{
		return true;
	}
	$slot_value = $page->getSlotValue($slot_name);
	if ($slot_value)
	{
		return true;
	}
	return false;
}

function sf_simple_cms_slot($page, $slot, $default_text = null, $default_type = 'Text')
{
	$context = sfContext::getInstance();
	$request = $context->getRequest();

	$culture = $request->getAttribute('culture');
	$slot_object = $page->getSlot($slot, constant(sfConfig::get('app_sfSimpleCMS_escaping_strategy', 'ESC_RAW')));

	if (!$slot_object)
	{
		$slot_object = new sfSimpleCMSSlot();
		$slot_object->setType($default_type);
		$slot_object->setCulture($culture);
	}

	$slot_value = $slot_object->getValue();
	$slot_type_name = $slot_object->getType();

	$slot_type_class = 'sfSimpleCMSSlot' . $slot_type_name;
	$slot_type = new $slot_type_class();

	if ($request->getParameter('edit') == 'true' && !$request->getParameter('preview'))
	{
		// echo '<div class="editable_slot" title="'.__('Double-click to edit').'" id="slot_'.$slot.'" onDblClick="jQuery(\'#edit_'.$slot.'\').show();jQuery(\'#slot_'.$slot.'\').hide();">';
		echo '<div class="editable_slot" title="' . __('Double-click to edit') . '" id="slot_' . $slot . '" rel="#edit_' . $slot . '">';

		if ($slot_value)
		{
			// Get slot value from the slot type object
			echo $slot_type->getSlotValue($slot_object);
		}
		else
		{
			// default text
			echo $default_text ? $default_text : sfConfig::get('app_sfSimpleCMS_default_text', __('[add text here]'));
		}

		echo '</div>';

		echo jq_form_remote_tag(array(
			'url' => 'zeroSimpleCMS/updateSlot',
			'script' => 'true',
			'update' => 'slot_' . $slot,
			'success' => 'jQuery(\'#slot_' . $slot . '\').show();
                        jQuery(\'#edit_' . $slot . '\').hide();jQuery(\'#slot_' . $slot . '\').html(data);jQuery(\'#slot_' . $slot . '\').effect(\'highlight\')'
				), array(
			'class' => 'edit_slot',
			'id' => 'edit_' . $slot
		));

		echo input_hidden_tag('slug', $page->getSlug(), 'id=edit_path' . $slot);
		echo input_hidden_tag('slot', $slot);
		if (sfConfig::get('app_sfSimpleCMS_use_l10n', false))
		{
			echo input_hidden_tag('sf_culture', $slot_object->getCulture());
		}

		// Get slot editor from the slot type object
		echo '<div class="editable_slot_editor_container">';
		echo $slot_type->getSlotEditor($slot_object);
		echo '</div>';

		echo '<div class="editable_slot_form_container">';
		echo label_for('slot_type', __('Type: '));
		echo select_tag(
				'slot_type',
				options_for_select(
						sfConfig::get('app_sfSimpleCMS_slot_types', array(
							'Text' => __('Simple Text'),
							'RichText' => __('Rich text'),
							'Php' => __('PHP code'),
							'Image' => __('Image'),
							'Modular' => __('List of partials/components'))),
						$slot_type_name
				)
		);
		if ($rich = sfConfig::get('app_sfSimpleCMS_rich_editing', false))
		{
			// activate rich text if global rich_editing is true and is the current slot is RichText
			$rich = ($slot_type_name == 'RichText');
		}
		echo submit_tag('update', array(
			'class' => 'submit_tag close'
		));

		// echo button_to_function('cancel', '// jQuery(\'#edit_'.$slot.'\').hide();jQuery(\'#slot_'.$slot.'\').show();', 'class=submit_tag close');
		echo button_to_function('cancel', 'void(0);', 'class=submit_tag close');


		echo '</form>';
		echo '</div>';
	}
	else
	{
		echo $slot_type->getSlotValue($slot_object);
	}
}

function link_to_with_path($text, $uri, $options = array())
{
	return str_replace('%2F', '/', link_to($text, $uri, $options));
}

function button_to_with_path($text, $uri, $options = array())
{
	return str_replace('%2F', '/', button_to($text, $uri, $options));
}