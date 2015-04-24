<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseZeroSimpleCMSNewPageForm
 *
 * @author fabian
 */
class BaseZeroSimpleCMSNewPageForm extends BaseFormPropel
{
    public function setup()
    {
        $category_options = array(
            'model' => 'sfSimpleCMSPage',
            'method' => 'getSlugWithLevel'
        );

        $propelChoice = new sfWidgetFormPropelChoice($category_options, array());

        $templates = sfConfig::get('app_zeroSimpleCMS_templates', array('home' => 'Homepage Template'));

        $this->setWidgets(array(
            'id' => new sfWidgetFormInputHidden(array(), array('autocomplete' => 'off')),
            'slug' => new sfWidgetFormInputText(array(), array('autocomplete' => 'off')),
            'title' => new sfWidgetFormInputText(array(), array('autocomplete' => 'off')),
            'title_short' => new sfWidgetFormInputText(array(), array('autocomplete' => 'off')),
            'meta' => new sfWidgetFormInputText(array(), array('autocomplete' => 'off')),
            'keywords' => new sfWidgetFormInputText(array(), array('autocomplete' => 'off')),
            'template' => new sfWidgetFormChoice(array('choices' => $templates)),
            'position' => new sfWidgetFormChoice(array('choices' => array('under' => 'under', 'after' => 'after'), 'expanded' => true, 'default' => 'under'), array('autocomplete' => 'off')),
            'related_page' => $propelChoice
        ));

        $this->getWidgetSchema()->setNameFormat('page[%s]');
        $this->setValidator('slug', new sfValidatorString());
        $this->setValidator('title', new sfValidatorString());
        $this->setValidator('title_short', new sfValidatorString());
        $this->setValidator('keywords', new sfValidatorString(array('required' => false)));
        $this->setValidator('meta', new sfValidatorString(array('required' => false)));
        $this->setValidator('template', new sfValidatorString());
        $this->setValidator('position', new sfValidatorChoice(array(
            'choices' => array('under', 'after')
        )));

        $this->getWidgetSchema()->setLabel('title_short', 'Short Title');
        $this->getWidgetSchema()->setLabel('meta', 'Description');

        $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
            new sfValidatorPropelUnique(array(
                'model' => 'sfSimpleCMSPage',
                'column' => array('title'))),
            new sfValidatorPropelUnique(array(
                'model' => 'sfSimpleCMSPage',
                'column' => array('title_short')))
        )));

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

    protected function doSave($con = null)
    {

        parent::doSave($con);

        // var_dump($this->values);
        // -- Se graba el cambio de posición de la categoria.
        $positionValues = $this->values['position'];

        if ($positionValues != null) {
            /* @var $newPage sfSimpleCMSPage */
            $newPage = $this->getObject();

            $relatedPagesCollection = sfSimpleCMSPageQuery::create()->findById($this->values['related_page']);
            $relatedPage = $relatedPagesCollection[0];

            // -- Chequea si la página no es el root (no se puede mover).
            if ($newPage->isRoot() == false) {
                // -- Chequea si la página ya está dentro del arbol..
                if ($newPage->isInTree() == false) {
                    if ($positionValues == 'under') {
                        $newPage->insertAsFirstChildOf($relatedPage, $con);
                        $newPage->save();
                    }

                    if ($positionValues == 'after') {
                        $newPage->insertAsNextSiblingOf($relatedPage, $con);
                        $newPage->save();
                    }
                } else {
                    if ($positionValues == 'under') {
                        $newPage->moveToLastChildOf($relatedPage, $con);
                    }

                    if ($positionValues == 'after') {
                        $newPage->moveToNextSiblingOf($relatedPage, $con);
                    }
                }
            }
        }
    }

    public function getModelName()
    {
        return "sfSimpleCMSPage";
    }

}
