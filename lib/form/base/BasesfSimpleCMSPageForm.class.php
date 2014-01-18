<?php

/**
 * sfSimpleCMSPage form base class.
 *
 * @method sfSimpleCMSPage getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfSimpleCMSPageForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'title_short'  => new sfWidgetFormInputText(),
      'topic_id'     => new sfWidgetFormInputText(),
      'template'     => new sfWidgetFormInputText(),
      'meta'         => new sfWidgetFormInputText(),
      'keywords'     => new sfWidgetFormInputText(),
      'is_published' => new sfWidgetFormInputCheckbox(),
      'is_secure'    => new sfWidgetFormInputCheckbox(),
      'deleted_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
      'tree_left'    => new sfWidgetFormInputText(),
      'tree_right'   => new sfWidgetFormInputText(),
      'tree_level'   => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'sfSimpleCMSPage', 'column' => 'id', 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_short'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'topic_id'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'template'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'keywords'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_published' => new sfValidatorBoolean(array('required' => false)),
      'is_secure'    => new sfValidatorBoolean(array('required' => false)),
      'deleted_at'   => new sfValidatorDateTime(array('required' => false)),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tree_left'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_right'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'tree_level'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'sfSimpleCMSPage', 'column' => array('title'))),
        new sfValidatorPropelUnique(array('model' => 'sfSimpleCMSPage', 'column' => array('title_short'))),
        new sfValidatorPropelUnique(array('model' => 'sfSimpleCMSPage', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('sf_simple_cms_page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfSimpleCMSPage';
  }


}
