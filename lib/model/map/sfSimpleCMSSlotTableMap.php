<?php



/**
 * This class defines the structure of the 'sf_simple_cms_slot' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.map
 */
class sfSimpleCMSSlotTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'plugins.zeroSimpleCmsPlugin.lib.model.map.sfSimpleCMSSlotTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('sf_simple_cms_slot');
        $this->setPhpName('sfSimpleCMSSlot');
        $this->setClassname('sfSimpleCMSSlot');
        $this->setPackage('plugins.zeroSimpleCmsPlugin.lib.model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('page_id', 'PageId', 'INTEGER' , 'sf_simple_cms_page', 'id', true, null, null);
        $this->addPrimaryKey('culture', 'Culture', 'VARCHAR', true, 7, null);
        $this->addPrimaryKey('name', 'Name', 'VARCHAR', true, 100, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 100, 'Text');
        $this->addColumn('value', 'Value', 'LONGVARCHAR', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('sfSimpleCMSPage', 'sfSimpleCMSPage', RelationMap::MANY_TO_ONE, array('page_id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'archivable' =>  array (
  'archive_table' => '',
  'archive_phpname' => NULL,
  'archive_class' => '',
  'log_archived_at' => 'true',
  'archived_at_column' => 'archived_at',
  'archive_on_insert' => 'false',
  'archive_on_update' => 'false',
  'archive_on_delete' => 'true',
),
            'timestampable' =>  array (
  'create_column' => 'created_at',
  'update_column' => 'updated_at',
  'disable_updated_at' => 'false',
),
            'symfony' =>  array (
  'form' => 'true',
  'filter' => 'true',
),
            'symfony_behaviors' =>  array (
),
        );
    } // getBehaviors()

} // sfSimpleCMSSlotTableMap
