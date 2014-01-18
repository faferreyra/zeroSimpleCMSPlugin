<?php

// autoloading for plugin lib actions is broken as at symfony-1.0.2
require_once(sfConfig::get('sf_plugins_dir'). '/zeroSimpleCMSPlugin/modules/zeroSimpleCMS/lib/BaseZeroSimpleCMSComponents.class.php');

class zeroSimpleCMSComponents extends BaseZeroSimpleCMSComponents
{
}
