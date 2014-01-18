<?php

class sfWidgetFormSchemaFormatterSlotEditor extends sfWidgetFormSchemaFormatter
{

	protected
	$rowFormat
	= '<div class="span-50 last slot-editor-row %row_class%"><div class="span-12 prepend-1">%label%</div><div class="span-36 append-1 last">%field% %error% %help% %hidden_fields%</div></div>',
	$errorRowFormat = "<div>%errors%</div>",
	$helpFormat = '<br /><div class="form-help">%help%</div>',
	$decoratorFormat = '<div class="span-45 last">%content%</div>',
	$errorListFormatInARow = "<ul class=\"form-field-error-list\">\n%errors%  </ul>\n",
	$requiredTemplate = '&nbsp;<pow class="form-field-required">*</pow>';
	protected
	$validatorSchema = null;
}