<?php

/**
 * Description of components
 *
 * @author fabian
 */
class zeroSimpleCMSAdminComponents extends sfComponents
{

	public function executeNewPage()
	{
		if (!isset($this->form))
		{
			$this->form = new zeroSimpleCMSNewPageForm();
		}
	}

	public function executeEditorTools()
	{
		if (!isset($this->pageForm) || $this->pageForm == null)
		{
			$this->pageForm = new zeroSimpleCMSUpdatePageForm($this->page);
			$this->getLogger()->info('Formulario creado');
		}
		else
		{
			$this->getLogger()->info('Formulario por parametro');
		}

		if ($this->createForm == null)
		{
			$this->createForm = new zeroSimpleCMSNewPageForm();
		}

		$this->pagesTree = sfSimpleCMSPageQuery::create()
						->findTree();
	}

}
