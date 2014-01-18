<?php

class zeroSimpleCMSUpdatePageForm extends BaseZeroSimpleCMSNewPageForm
{
	public function configure()
	{
		$this->validatorSchema['related_page'] = new sfValidatorPass();
		$this->validatorSchema['id'] = new sfValidatorPass();
	}

}

