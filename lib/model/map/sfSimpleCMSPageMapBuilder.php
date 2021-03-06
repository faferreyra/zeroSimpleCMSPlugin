<?php


/**
 * This class adds structure of 'sf_simple_cms_page' table to 'propel' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.zeroSimpleCMSPlugin.lib.model.map
 */
class sfSimpleCMSPageMapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.zeroSimpleCMSPlugin.lib.model.map.sfSimpleCMSPageMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('sf_simple_cms_page');
		$tMap->setPhpName('sfSimpleCMSPage');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SLUG', 'Slug', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TREE_LEFT', 'TreeLeft', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TREE_RIGHT', 'TreeRight', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TREE_PARENT', 'TreeParent', 'int', CreoleTypes::INTEGER, 'sf_simple_cms_page', 'ID', false, null);

		$tMap->addColumn('TOPIC_ID', 'TopicId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TEMPLATE', 'Template', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('IS_PUBLISHED', 'IsPublished', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IS_SECURE', 'IsSecure', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} // doBuild()

} // sfSimpleCMSPageMapBuilder
