<?php

/**
 * SfSimpleCmsSlotArchive filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfSimpleCmsSlotArchiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'type'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value'       => new sfWidgetFormFilterInput(),
      'archived_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'type'        => new sfValidatorPass(array('required' => false)),
      'value'       => new sfValidatorPass(array('required' => false)),
      'archived_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('sf_simple_cms_slot_archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfSimpleCmsSlotArchive';
  }

  public function getFields()
  {
    return array(
      'page_id'     => 'Number',
      'culture'     => 'Text',
      'name'        => 'Text',
      'type'        => 'Text',
      'value'       => 'Text',
      'archived_at' => 'Date',
    );
  }
}
