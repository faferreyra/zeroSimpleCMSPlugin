<?php

/**
 * Description of BaseZeroSimpleCMSActions
 *
 * @author fabian
 */
class BaseZeroSimpleCMSActions extends sfActions
{

	public function executeShow(sfWebRequest $request)
	{
		$slug = $request->getParameter('slug');

		$this->page = sfSimpleCMSPage::getPageBySlug($slug);				

		$this->forward404Unless($this->page, 'Page with slug=' . $slug . ' not found or not published');

		if ($this->page->getMeta() != null)
		{
			$this->getResponse()->addMeta('description', $this->page->getMeta(), true);
		}

		if ($this->page->getKeywords() != null)
		{
			$this->getResponse()->addMeta('keywords', $this->page->getKeywords(), true);
		}
	}

}