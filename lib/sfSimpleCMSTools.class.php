<?php

class sfSimpleCMSTools
{
	public static function urlForPage($slug, $query_string = '', $culture = '')
	{
		 
		$culture_parameter = '';
		 
		if(sfConfig::get('app_sfSimpleCMS_use_l10n', false))
		{
			$culture_parameter = $culture ? $culture : sfContext::getInstance()->getRequest()->getParameter('sf_culture');
		}

		$params = array(
        "module" => 'zeroSimpleCMS',
        "action" => 'show',
        "slug" => "-PLACEHOLDER-"
        );

        if($culture_parameter != '') {
        	$params = array_merge($params, array('sf_culture' => $culture_parameter));
        };

        $routed_url = sfContext::getInstance()->getController()->genUrl($params, true);

        return str_replace('-PLACEHOLDER-', $slug, $routed_url).($query_string ? '?'.$query_string : '');
	}
}