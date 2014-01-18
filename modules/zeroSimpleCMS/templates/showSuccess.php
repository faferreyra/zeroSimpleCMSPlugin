<h1>Template de Ejemplo, sobreescribir</h1>

<?php	

	/* @var $page sfSimpleCMSPage */
	$template = $page->getTemplate();

	include_partial('zeroSimpleCMSTemplates/' . $template, array('page' => $page ));









