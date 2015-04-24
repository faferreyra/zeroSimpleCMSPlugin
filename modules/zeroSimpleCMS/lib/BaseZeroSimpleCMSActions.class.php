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

        $this->forward404Unless(($this->page != null), 'Page with slug=' . $slug . ' not found or not published');

        if ($this->page->getTitle() != null && trim($this->page->getTitle()) != "") {
            $this->getWebResponse()->setTitle(sprintf('%s - %s',
                sfConfig::get('app_title', 'Site'), $this->translate($this->page->getTitle())));
        }

        if ($this->page->getMeta() != null) {
            $this->getResponse()->addMeta('description', $this->page->getMeta(), true);
        }

        if ($this->page->getKeywords() != null) {
            $this->getResponse()->addMeta('keywords', $this->page->getKeywords(), true);
        }
    }

    public function executeRemoteSave(sfWebRequest $request)
    {
        $pageSlug = $request->getParameter('page', null);
        $this->forward404Unless($pageSlug);

        $slotName = $request->getParameter('slot', null);
        $this->forward404Unless($slotName);

        $body = $request->getParameter('body', null);
        $this->forward404Unless($body);

        $page = sfSimpleCMSPage::getPageBySlug($pageSlug);
        $slot = sfSimpleCMSSlot::getOrCreate($page, $slotName, $this->getUser()->getCulture(), 'RichEdit');

        $slot->setValue(json_encode(array('html' => $body)));
        $slot->save();

        return $this->renderJson(array('status' => 'ok', 'culture' => $this->getUser()->getCulture()));
    }

    /**
     * @return sfWebResponse
     */
    private function getWebResponse() {
        return $this->getResponse();
    }

    private function translate($key, $arguments = array(), $catalogue = 'messages') {
        $this->getContext()->getConfiguration()->loadHelpers('I18N');
        return __($key, $arguments, $catalogue);
    }
}