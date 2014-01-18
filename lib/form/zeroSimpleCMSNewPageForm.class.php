<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of zeroSimpleCMSNewPageForm
 *
 * @author fabian
 */
class zeroSimpleCMSNewPageForm extends BaseZeroSimpleCMSNewPageForm
{

	public function configure()
	{
		unset($this->widgetSchema['id']);
		$this->validatorSchema['related_page'] = new sfValidatorPass();
		$this->validatorSchema['id'] = new sfValidatorPass();
	}

}