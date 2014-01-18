<?php

	/* @var $slot zeroSimpleCMSSlotType */
	$slot = $sf_data->getRaw('slot');

?>
<?php if($edition == true): ?>

<div class="editable-slot" id="editable-slot-<?php echo $slot->getName(); ?>" data-pageslug="<?php echo $page->getSlug(); ?>" data-slotname="<?php echo $slot->getName(); ?>">

	<?php include_component('zeroSimpleCMS', 'slotEditor', array('slot' => $slot, 'page' => $page )); ?>
	
</div>

<?php else: ?>
<?php echo $slot->getValue(); ?>
<?php endif; ?>