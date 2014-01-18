<?php

// autoloading for plugin lib actions is broken as of symfony-1.0.2
require_once(sfConfig::get('sf_plugins_dir'). '/zeroSimpleCMSPlugin/modules/zeroSimpleCMSAdmin/lib/BaseZeroSimpleCMSAdminActions.class.php');

class zeroSimpleCMSAdminActions extends BaseZeroSimpleCMSAdminActions
{
}
