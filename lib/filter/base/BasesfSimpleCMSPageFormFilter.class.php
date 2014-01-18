<?php

/**
 * sfSimpleCMSPage filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfSimpleCMSPageFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'        => new sfWidgetFormFilterInput(),
      'title_short'  => new sfWidgetFormFilterInput(),
      'topic_id'     => new sfWidgetFormFilterInput(),
      'template'     => new sfWidgetFormFilterInput(),
      'meta'         => new sfWidgetFormFilterInput(),
      'keywords'     => new sfWidgetFormFilterInput(),
      'is_published' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_secure'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'deleted_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'slug'         => new sfWidgetFormFilterInput(),
      'tree_left'    => new sfWidgetFormFilterInput(),
      'tree_right'   => new sfWidgetFormFilterInput(),
      'tree_level'   => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'title'        => new sfValidatorPass(array('required' => false)),
      'title_short'  => new sfValidatorPass(array('required' => false)),
      'topic_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'template'     => new sfValidatorPass(array('required' => false)),
      'meta'         => new sfValidatorPass(array('required' => false)),
      'keywords'     => new sfValidatorPass(array('required' => false)),
      'is_published' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_secure'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'deleted_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'slug'         => new sfValidatorPass(array('required' => false)),
      'tree_left'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_right'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tree_level'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('sf_simple_cms_page_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfSimpleCMSPage';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'title'        => 'Text',
      'title_short'  => 'Text',
      'topic_id'     => 'Number',
      'template'     => 'Text',
      'meta'         => 'Text',
      'keywords'     => 'Text',
      'is_published' => 'Boolean',
      'is_secure'    => 'Boolean',
      'deleted_at'   => 'Date',
      'slug'         => 'Text',
      'tree_left'    => 'Number',
      'tree_right'   => 'Number',
      'tree_level'   => 'Number',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
