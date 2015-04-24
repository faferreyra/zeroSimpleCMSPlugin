<?php

class zeroSimpleCMSExtraRouting
{

	static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
	{
		$r              = $event->getSubject();
		$enabledModules = sfConfig::get('sf_enabled_modules', array());

		if(in_array('zeroSimpleCMSAdmin', $enabledModules))
		{

		}

		if(in_array('zeroSimpleCMS', $enabledModules))
		{
			// $r->prependRoute('cms_show_page', new sfRoute('/:slug', array('module' => 'zeroSimpleCMS', 'action' => 'show')));
		}
	}

    static public function addRoutesForFrontend(sfEvent $event)
    {
        /** @var sfPatternRouting $r */
        $r = $event->getSubject();

        $r->prependRoute('zeroSimpleCMS_remote_save', new sfRoute('/zeroSimpleCMS/save',
            array(
                'module' => 'zeroSimpleCMS', 'action' => 'remoteSave'
            )));
    }

    static public function addRoutesForAdmin(sfEvent $event)
    {
        /** @var sfPatternRouting $r */
        $r = $event->getSubject();
        $r->prependRoute('zeroSimpleCMSAdmin_remote_publish', new sfRoute('/zeroSimpleCMSAdmin/remote_publish_toggle',
            array(
                'module' => 'zeroSimpleCMSAdmin', 'action' => 'remotePublish'
            )));
        $r->prependRoute('zeroSimpleCMSAdmin_remote_update', new sfRoute('/zeroSimpleCMSAdmin/remote_update',
            array(
                'module' => 'zeroSimpleCMSAdmin', 'action' => 'remoteUpdate'
            )));
        $r->prependRoute('zeroSimpleCMSAdmin_remote_create', new sfRoute('/zeroSimpleCMSAdmin/remote_create',
            array(
                'module' => 'zeroSimpleCMSAdmin', 'action' => 'remoteCreate'
            )));

        $r->prependRoute('pages', new sfPropelRouteCollection(array(
            'name'                 => 'sf_simple_cms_page',
            'model'                => 'sfSimpleCMSPage',
            'module'               => 'zeroSimpleCMSAdmin',
            'prefix_path'          => '/admin/page',
            'with_wildcard_routes' => true,
            'requirements'         => array(),
        )));
    }
}

