<div id="page-edition-container">
	<div id="page-edition">
<?php

	use_helper('sfSimpleCMS');

	/* @var $page sfSimpleCMSPage */
	$template = $page->getTemplate();
	
	include_partial('zeroSimpleCmsTemplates/' . $template, array('page' => $page, 'edition' => true ));

?>
	</div>
</div>

<?php // use_javascript('/sfMediaBrowserPlugin/js/WindowManager.js'); ?>
<?php // use_javascript('/zeroSimpleCMSPlugin/js/admin-tools.js'); ?>
<div id="editor-tools-container">
<?php include_editor_tools($page); ?>
</div>
<input type="hidden" value="<?php // echo url_for('@sf_media_browser_select'); ?>" id="mediaBrowserUrl" />