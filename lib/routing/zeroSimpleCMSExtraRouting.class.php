<?php

class zeroSimpleCMSExtraRouting
{

	static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
	{
		$r              = $event->getSubject();
		$enabledModules = sfConfig::get('sf_enabled_modules', array());

		if(in_array('zeroSimpleCMSAdmin', $enabledModules))
		{
			$r->prependRoute('zeroSimpleCMSAdmin_remote_publish', new sfRoute('/zeroSimpleCMSAdmin/remote_publish_toggle', array('module' => 'zeroSimpleCMSAdmin', 'action' => 'remotePublish')));
			$r->prependRoute('zeroSimpleCMSAdmin_remote_update', new sfRoute('/zeroSimpleCMSAdmin/remote_update', array('module' => 'zeroSimpleCMSAdmin', 'action' => 'remoteUpdate')));
			$r->prependRoute('zeroSimpleCMSAdmin_remote_create', new sfRoute('/zeroSimpleCMSAdmin/remote_create', array('module' => 'zeroSimpleCMSAdmin', 'action' => 'remoteCreate')));
		}

		if(in_array('zeroSimpleCMS', $enabledModules))
		{
			// $r->prependRoute('cms_show_page', new sfRoute('/:slug', array('module' => 'zeroSimpleCMS', 'action' => 'show')));
		}
	}

}

