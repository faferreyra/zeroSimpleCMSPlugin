<?php

/**
 * sfSimpleCMSSlot form base class.
 *
 * @method sfSimpleCMSSlot getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfSimpleCMSSlotForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'page_id'    => new sfWidgetFormInputHidden(),
      'culture'    => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputHidden(),
      'type'       => new sfWidgetFormInputText(),
      'value'      => new sfWidgetFormTextarea(),
      'deleted_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'page_id'    => new sfValidatorPropelChoice(array('model' => 'sfSimpleCMSPage', 'column' => 'id', 'required' => false)),
      'culture'    => new sfValidatorPropelChoice(array('model' => 'sfSimpleCMSSlot', 'column' => 'culture', 'required' => false)),
      'name'       => new sfValidatorPropelChoice(array('model' => 'sfSimpleCMSSlot', 'column' => 'name', 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 100)),
      'value'      => new sfValidatorString(array('required' => false)),
      'deleted_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_simple_cms_slot[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfSimpleCMSSlot';
  }


}
