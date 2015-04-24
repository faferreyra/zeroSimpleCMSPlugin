<?php

class zeroSimpleCmsPluginConfiguration extends sfPluginConfiguration
{
    /**
     * @see sfPluginConfiguration
     */
    public function initialize()
    {
        if (in_array('zeroSimpleCMS', sfConfig::get('sf_enabled_modules', array())))
        {
            $this->dispatcher->connect('routing.load_configuration', array('zeroSimpleCMSExtraRouting', 'addRoutesForFrontend'));
        }

        if (in_array('zeroSimpleCMSAdmin', sfConfig::get('sf_enabled_modules', array())))
        {
            $this->dispatcher->connect('routing.load_configuration', array('zeroSimpleCMSExtraRouting', 'addRoutesForAdmin'));
        }
    }
}