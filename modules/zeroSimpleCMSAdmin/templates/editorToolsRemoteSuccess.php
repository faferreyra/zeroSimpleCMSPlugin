<?php use_helper('sfSimpleCMS'); ?>
<?php include_editor_tools($page, $pageForm, @$createForm); ?>
<script type="text/javascript">
	restore_toolbar_state();
<?php if( isset($createForm) && $createForm->getObject() != null):?>
		location.href = "<?php echo url_for('@default?module=zeroSimpleCMSAdmin&action=editPage&id=' . $createForm->getObject()->getId()); ?>";
<?php endif; ?>
</script>