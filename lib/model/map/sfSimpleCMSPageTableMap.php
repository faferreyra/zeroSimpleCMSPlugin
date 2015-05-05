<?php



/**
 * This class defines the structure of the 'sf_simple_cms_page' table.
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
class sfSimpleCMSPageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'plugins.zeroSimpleCmsPlugin.lib.model.map.sfSimpleCMSPageTableMap';

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
        $this->setName('sf_simple_cms_page');
        $this->setPhpName('sfSimpleCMSPage');
        $this->setClassname('sfSimpleCMSPage');
        $this->setPackage('plugins.zeroSimpleCmsPlugin.lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('slug', 'Slug', 'VARCHAR', false, 255, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 255, null);
        $this->addColumn('title_short', 'TitleShort', 'VARCHAR', false, 255, null);
        $this->addColumn('topic_id', 'TopicId', 'INTEGER', false, null, null);
        $this->addColumn('template', 'Template', 'VARCHAR', false, 255, null);
        $this->addColumn('meta', 'Meta', 'VARCHAR', false, 255, null);
        $this->addColumn('keywords', 'Keywords', 'VARCHAR', false, 255, null);
        $this->addColumn('is_published', 'IsPublished', 'BOOLEAN', false, 1, null);
        $this->addColumn('is_secure', 'IsSecure', 'BOOLEAN', false, 1, null);
        $this->addColumn('tree_left', 'TreeLeft', 'INTEGER', false, null, null);
        $this->addColumn('tree_right', 'TreeRight', 'INTEGER', false, null, null);
        $this->addColumn('tree_level', 'TreeLevel', 'INTEGER', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('sfSimpleCMSSlot', 'sfSimpleCMSSlot', RelationMap::ONE_TO_MANY, array('id' => 'page_id', ), 'CASCADE', null, 'sfSimpleCMSSlots');
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
            'nested_set' =>  array (
  'left_column' => 'tree_left',
  'right_column' => 'tree_right',
  'level_column' => 'tree_level',
  'use_scope' => 'false',
  'scope_column' => 'tree_scope',
  'method_proxies' => 'false',
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
            'symfony_timestampable' =>  array (
  'create_column' => 'created_at',
  'update_column' => 'updated_at',
),
        );
    } // getBehaviors()

} // sfSimpleCMSPageTableMap
