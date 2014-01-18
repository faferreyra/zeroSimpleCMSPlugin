<?php

	include_component('zeroSimpleCMSAdmin', 'newPage', array('form' => $form));

	if(isset($newPage)):
?>

	<script type="text/javascript">
		location.href = "<?php echo url_for('@default?module=zeroSimpleCMSAdmin&action=editPage&id=' . $newPage->getId()); ?>";
	</script>

<?php
	endif;
