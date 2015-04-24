<?php

/**
 * SfSimpleCmsSlotArchive form base class.
 *
 * @method SfSimpleCmsSlotArchive getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfSimpleCmsSlotArchiveForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'page_id'     => new sfWidgetFormInputHidden(),
      'culture'     => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputHidden(),
      'type'        => new sfWidgetFormInputText(),
      'value'       => new sfWidgetFormTextarea(),
      'archived_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'page_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getPageId()), 'empty_value' => $this->getObject()->getPageId(), 'required' => false)),
      'culture'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getCulture()), 'empty_value' => $this->getObject()->getCulture(), 'required' => false)),
      'name'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getName()), 'empty_value' => $this->getObject()->getName(), 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 100)),
      'value'       => new sfValidatorString(array('required' => false)),
      'archived_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_simple_cms_slot_archive[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfSimpleCmsSlotArchive';
  }


}
