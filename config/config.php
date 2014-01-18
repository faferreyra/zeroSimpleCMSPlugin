<?php

if(sfConfig::get('app_zeroSimpleCMS_register_routes', true))
{
	$this->dispatcher->connect('routing.load_configuration', array('zeroSimpleCMSExtraRouting', 'listenToRoutingLoadConfigurationEvent'));
}

/*
if (sfConfig::get('app_sfSimpleCMS_routes_register', true) && in_array('zeroSimpleCMS', sfConfig::get('sf_enabled_modules')))
{
  $r = sfRouting::getInstance();
  // preprend our routes
  $r->prependRoute('sf_cms_delete', '/cms_delete/:sf_culture/:slug', array('module' => 'zeroSimpleCMS', 'action' => 'delete'), array('slug' => '.*'));
  $r->prependRoute('sf_cms_toggle_publish', '/cms_publish/:slug', array('module' => 'zeroSimpleCMS', 'action' => 'togglePublish'), array('slug' => '.*'));
  
  if(sfConfig::get('app_sfSimpleCMS_use_l10n', false))
  {
    $r->prependRoute('sf_cms_show', '/cms/:sf_culture/:slug', array('module' => 'zeroSimpleCMS', 'action' => 'show'), array('slug' => '.*'));
  }
  else
  {
    $r->prependRoute('sf_cms_show', '/cms/:slug', array('module' => 'zeroSimpleCMS', 'action' => 'show'), array('slug' => '.*'));
  }
}
 *
 */