<?php

/**
 * Description of BaseZeroSimpleCMSComponents
 *
 * @author fabian
 */
class BaseZeroSimpleCMSComponents extends sfComponents
{
    public function executeSlot()
    {
        $slotName = $this->slot;

        $slot = sfSimpleCMSSlotQuery::create()
            ->filterByName($slotName)
            ->filterByPageId($this->page->getId())
            ->filterByCulture(sfContext::getInstance()->getUser()->getCulture())
            ->findOne();

        if ($slot != null) {

            $slotType = $slot->getType();

            $slotClass = 'zeroSimpleCMS' . ucfirst($slotType) . 'Slot';

            $this->slot = new $slotClass;
            $this->slot->setName($slotName);
            $this->slot->setValue($slot->getValue());

        } else {

            // -- No hay slot en la DB, se crea uno nuevo.
            $defaultSlotType = isset($this->defaults) && isset($this->defaults['type']) ? $this->defaults['type'] : sfConfig::get('app_zeroSimpleCMS_defaults_slotType', 'text');

            $slotClass = 'zeroSimpleCMS' . ucfirst($defaultSlotType) . 'Slot';

            /* @var $this ->slot zeroSimpleCMSSlotType */
            $this->slot = new $slotClass;
            $this->slot->setName($slotName);
            $this->slot->setValue(isset($this->defaults) ? sfYaml::dump($this->defaults) : sfConfig::get('app_zeroSimpleCMS_defaults_slotValue', '[ Click to edit this slot ]'));
        }

        // TODO(fferreyra): Determinar cuando el slot está en modo edición.
        $this->setVar('edition', true);
    }

    function executeSlotEditor()
    {
        $this->slotPropertiesForm = new zeroSimpleCMSSlotPropertiesForm($this->slot, $this->page);
    }

    public function executePage()
    {
        $slug = $this->slug;

        if ($slug != null) {
            $this->page = sfSimpleCMSPageQuery::create()
                ->filterBySlug($slug)
                ->filterByIsPublished(true)
                ->findOne();

            if ($this->page == null) {
                throw(new Exception(sprintf('Page not found with slug %s.', $slug)));
            }

            if ($this->page->getMeta() != null) {
                $this->getResponse()->addMeta('description', $this->page->getMeta(), true);
            }

            if ($this->page->getKeywords() != null) {
                $this->getResponse()->addMeta('keywords', $this->page->getKeywords(), true);
            }
        } else {
            throw(new Exception('Slug option not present calling component zeroSimpleCMS/page'));
        }
    }

    public function executeHtml()
    {
        $slot = $this->getSlot($this->page, $this->slot, 'richEdit');
        $this->setVar('slot', $slot);

        /** @var myUser $user */
        $user = sfContext::getInstance()->getUser();
        $this->setVar('edition', $user->isAuthenticated() && ($user->isSuperAdmin()
                || $user->getGuardUser()->hasPermission('cms_edit')));
    }

    /**
     * @param sfSimpleCMSPage $page
     * @param $slotName
     * @param string $defaultSlotType
     * @return zeroSimpleCMSSlotType
     * @throws PropelException
     */
    private function getSlot(sfSimpleCMSPage $page, $slotName, $defaultSlotType = 'text')
    {
        $pageSlot = sfSimpleCMSSlotQuery::create()
            ->filterByName($slotName)
            ->filterBysfSimpleCMSPage($page)
            ->filterByCulture(sfContext::getInstance()->getUser()->getCulture())
            ->findOne();

        if ($pageSlot != null) {

            $slotType = $pageSlot->getType();

            $slotClass = 'zeroSimpleCMS' . ucfirst($slotType) . 'Slot';

            $slot = new $slotClass;
            $slot->setName($slotName);
            $slot->setValue($pageSlot->getValue());

        } else {

            // -- No hay slot en la DB, se crea uno nuevo.
            $defaultSlotType = isset($this->defaults) && isset($this->defaults['type']) ?
                $this->defaults['type'] :
                sfConfig::get('app_zeroSimpleCMS_defaults_slotType', $defaultSlotType);

            $slotClass = 'zeroSimpleCMS' . ucfirst($defaultSlotType) . 'Slot';

            /* @var $this ->slot zeroSimpleCMSSlotType */
            $slot = new $slotClass;
            $slot->setName($slotName);
            $slot->setValue(isset($this->defaults) ? sfYaml::dump($this->defaults) : sfConfig::get('app_zeroSimpleCMS_defaults_slotValue', '[ Click to edit this slot ]'));
        }

        return $slot;
    }
}