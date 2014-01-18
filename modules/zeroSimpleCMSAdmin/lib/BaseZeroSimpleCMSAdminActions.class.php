<?php

/**
 * Base class form zeroSimpleCMSAdmin module actions.
 *
 * @author fabian
 */
class BaseZeroSimpleCMSAdminActions extends autoZeroSimpleCMSAdminActions
{

	public function executeCreateNewPage(sfWebRequest $request)
	{

		if ($request->isMethod('post'))
		{

			$this->form = new zeroSimpleCMSNewPageForm(new sfSimpleCMSPage());

			$data = $request->getParameter('page');

			$this->form->bind($data);

			if ($this->form->isValid())
			{

				$this->form->save();

				$this->newPage = $this->form->getObject();

				$this->getUser()->setFlash('notice', 'Page created successfully.');

				// $this->redirect('@sf_simple_cms_page_editPage?id=' . $newPage->getId());
			}
		}

		return sfView::ERROR;
	}

	public function executeEditPage(sfWebRequest $request)
	{

		$pageId = $request->getParameter('id');

		$this->page = sfSimpleCMSPagePeer::retrieveByPK($pageId);

		$this->forward404Unless($this->page);
	}

	public function executeUpdateSlot(sfWebRequest $request)
	{
		$parameters = $this->getRequestParameter('slot');
		$slotParameters = $request->getParameter('slotEditor');

		$this->forward404Unless($parameters, 'Parameters not found');
		$this->forward404Unless($slotParameters, 'Slot parameters not found');

		$slotName = $parameters['slot'];
		$pageSlug = $parameters['page'];

		$this->forward404Unless($slotName, 'Slot name not present');
		$this->forward404Unless($pageSlug, 'Page slug not present');

		$this->page = sfSimpleCMSPageQuery::create()->filterBySlug($pageSlug)
						->findOne();

		$this->forward404Unless($this->page, 'Page not found');

		// --
		$pageSlot = sfSimpleCMSSlotQuery::create()->filterByName($slotName)
						->filterByPageId($this->page->getId())
						->filterByCulture('es')
						->findOne();

		if ($pageSlot == null)
		{
			$pageSlot = new sfSimpleCMSSlot();
			$pageSlot->setPageId($this->page->getId());
			$pageSlot->setCulture('es');
			$pageSlot->setName($slotName);
		}

		$slotClass = 'zeroSimpleCMS' . ucfirst($parameters['type']) . 'Slot';

		/* @var $slot zeroSimpleCMSSlotType */
		$slot = new $slotClass;
		$serializedValue = $slot->serializeValue($slotParameters);

		$pageSlot->setValue($serializedValue);
		$pageSlot->setType($parameters['type']);
		$pageSlot->save();

		// --
		$this->slot = $pageSlot->getSlotType();
	}

	public function executeRemotePublish(sfWebRequest $request)
	{
		$slug = $request->getParameter('slug');

		$this->forward404Unless($slug);

		$this->page = sfSimpleCMSPageQuery::create()->findOneBySlug($slug);

		$this->forward404Unless($this->page);

		$isPublished = $this->page->getIsPublished();

		$this->page->setIsPublished(!$isPublished);
		$this->page->save();

		$this->setTemplate('editorToolsRemote');
	}

	public function executeRemoteUpdate(sfWebRequest $request)
	{
		$pageData = $request->getParameter('page');

		$this->forward404Unless($pageData['id']);

		$this->page = sfSimpleCMSPageQuery::create()->findOneById($pageData['id']);

		$this->forward404Unless($this->page);

		$this->pageForm = new zeroSimpleCMSUpdatePageForm($this->page);

		$this->pageForm->bind($pageData);

		if ($this->pageForm->isValid())
		{
			$this->getUser()->setFlash("page.updated", "Page Updated");

			$this->pageForm->save();

			// -- Se hace esto para asegurarnos que el combo con las paginas esté actualizado.
			$this->pageForm = new zeroSimpleCMSUpdatePageForm($this->page);
		}
		else
		{
			$this->getLogger()->info('Formulario de pagina no valido, saliendo.');
		}

		$this->setTemplate('editorToolsRemote');
	}

	public function executeRemoteCreate(sfWebRequest $request)
	{
		$pageId = $request->getParameter('page_id');

		$this->forward404Unless($pageId);

		$this->page = sfSimpleCMSPageQuery::create()->findOneById($pageId);

		$this->forward404Unless($this->page);

		$this->pageForm = new zeroSimpleCMSNewPageForm($this->page);

		// -- Aca comienza la creacion de la nueva pagina.

		$pageData = $request->getParameter('page');

		$this->forward404Unless($pageData);

		unset($pageData['id']);

		$this->createForm = new zeroSimpleCMSNewPageForm();

		$this->createForm->bind($pageData);

		if ($this->createForm->isValid())
		{
			$this->getLogger()->info('Formulario de pagina valido, grabando.');

			$this->getUser()->setFlash("page.created", "Page Created");

			$this->createForm->save();
		}
		else
		{
			$this->getLogger()->info('Formulario de pagina no valido, saliendo.');
		}

		$this->setTemplate('editorToolsRemote');
	}

}