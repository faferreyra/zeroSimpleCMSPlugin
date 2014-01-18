
	<div class="slot-value-container">
	<?php

		$slot = $sf_data->getRaw('slot');

		$slotValue = $slot->getValue() ? $slot->getValue() : sfConfig::get('app_zeroSimpleCMS_defaults_slot_text', '[ Double click to edit ]');
		
		echo strip_tags($slotValue, '<p><br><img><strong>');
	?>
	</div>

	<?php echo jq_form_remote_tag(array(
		 'url' => 'zeroSimpleCMSAdmin/updateSlot',
		 'update' => 'editable-slot-' . $slot->getName()
	 )); ?>

	
	<div class="slot-editor-container" data-slotname="<?php echo $slot->getName(); ?>">

		<div class="edit-slot" data-slotname="<?php echo $slot->getName(); ?>">

			<div class="edit-slot-form-container slot-39 last">
				<?php echo $slot->getEditingForm(); ?>
			</div>

			<div class="edit-slot-actions-container">
			
			<?php echo $slotPropertiesForm; ?>
			<input type="submit" value="<?php echo __('Save'); ?>" class="close" />
			<?php echo jq_button_to_function( __('Cancel'), 'void(0)', array('class' => 'close' )); ?>
			</div>
		</div>
	</div>
	<?php echo '</form>'; ?>
