<?php /* @var $page sfSimpleCMSPage */ ?>
<?php

	$template = $page->getTemplate();

	include_partial('zeroSimpleCMSTemplates/' . $template, array('page' => $page, 'edition' => false ));
?>