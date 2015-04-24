<?php

/**
 * SfSimpleCmsPageArchive form base class.
 *
 * @method SfSimpleCmsPageArchive getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfSimpleCmsPageArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'slug'         => new sfWidgetFormInputText(),
      'title'        => new sfWidgetFormInputText(),
      'title_short'  => new sfWidgetFormInputText(),
      'topic_id'     => new sfWidgetFormInputText(),
      'template'     => new sfWidgetFormInputText(),
      'meta'         => new sfWidgetFormInputText(),
      'keywords'     => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'is_secure'    => new sfWidgetFormInputCheckbox(),
      'archived_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_short'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'topic_id'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'template'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'keywords'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'is_secure'    => new sfValidatorBoolean(array('required' => false)),
      'archived_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_simple_cms_page_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfSimpleCmsPageArchive';
  }


}
