<?php



/**
 * This class defines the structure of the 'sf_simple_cms_page' table.
 *
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Tue Jan 25 07:28:17 2011
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.zeroSimpleCMSPlugin.lib.model.map
 */
class sfSimpleCMSPageTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.zeroSimpleCMSPlugin.lib.model.map.sfSimpleCMSPageTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('sf_simple_cms_page');
		$this->setPhpName('sfSimpleCMSPage');
		$this->setClassname('sfSimpleCMSPage');
		$this->setPackage('plugins.zeroSimpleCMSPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 255, null);
		$this->addColumn('TITLE_SHORT', 'TitleShort', 'VARCHAR', false, 255, null);
		$this->addColumn('TOPIC_ID', 'TopicId', 'INTEGER', false, null, null);
		$this->addColumn('TEMPLATE', 'Template', 'VARCHAR', false, 255, null);
		$this->addColumn('META', 'Meta', 'VARCHAR', false, 255, null);
		$this->addColumn('KEYWORDS', 'Keywords', 'VARCHAR', false, 255, null);
		$this->addColumn('IS_PUBLISHED', 'IsPublished', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_SECURE', 'IsSecure', 'BOOLEAN', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 255, null);
		$this->addColumn('TREE_LEFT', 'TreeLeft', 'INTEGER', false, null, null);
		$this->addColumn('TREE_RIGHT', 'TreeRight', 'INTEGER', false, null, null);
		$this->addColumn('TREE_LEVEL', 'TreeLevel', 'INTEGER', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('sfSimpleCMSSlot', 'sfSimpleCMSSlot', RelationMap::ONE_TO_MANY, array('id' => 'page_id', ), 'CASCADE', null);
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
			'soft_delete' => array('deleted_column' => 'deleted_at', ),
			'sluggable' => array('slug_column' => 'slug', 'slug_pattern' => '', 'replace_pattern' => '/\W+/', 'replacement' => '-', 'separator' => '-', 'permanent' => 'false', ),
			'nested_set' => array('left_column' => 'tree_left', 'right_column' => 'tree_right', 'level_column' => 'tree_level', 'use_scope' => 'false', 'scope_column' => 'tree_scope', 'method_proxies' => 'false', ),
			'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // sfSimpleCMSPageTableMap
