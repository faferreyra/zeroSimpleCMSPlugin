<?php

/**
 * Subclass for representing a row from the 'sf_simple_cms_page' table.
 *
 * 
 *
 * @package plugins.sfSimpleCMSPlugin.lib.model
 */
class sfSimpleCMSPage extends BasesfSimpleCMSPage
{

	public function __toString()
	{
		return $this->getTitle();
	}

	public function getSlugWithLevel()
	{
		return str_repeat('-', $this->getLevel()) . ' ' . $this->getSlug();
	}

	public static function getPageBySlug($slug, $published = true)
	{
		return sfSimpleCMSPageQuery::create()->published($published)->slug($slug)->findOne();
	}

	public function createRawSlug()
	{
		return $this->getTitle();
	}
}