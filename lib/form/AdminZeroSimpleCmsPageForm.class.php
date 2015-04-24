<?php

class AdminZeroSimpleCmsPageForm extends sfSimpleCMSPageForm
{
    public function configure()
    {
        $this->setWidget('template', new sfWidgetFormChoice(array(
            'choices' => sfConfig::get('app_zero_simple_cms_templates', array('home' => 'Homepage'))
        )));
    }
}