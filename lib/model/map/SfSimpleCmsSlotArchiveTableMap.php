<?php



/**
 * This class defines the structure of the 'sf_simple_cms_slot_archive' table.
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
class SfSimpleCmsSlotArchiveTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'plugins.zeroSimpleCmsPlugin.lib.model.map.SfSimpleCmsSlotArchiveTableMap';

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
        $this->setName('sf_simple_cms_slot_archive');
        $this->setPhpName('SfSimpleCmsSlotArchive');
        $this->setClassname('SfSimpleCmsSlotArchive');
        $this->setPackage('plugins.zeroSimpleCmsPlugin.lib.model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('page_id', 'PageId', 'INTEGER', true, null, null);
        $this->addPrimaryKey('culture', 'Culture', 'VARCHAR', true, 7, null);
        $this->addPrimaryKey('name', 'Name', 'VARCHAR', true, 100, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 100, 'Text');
        $this->addColumn('value', 'Value', 'LONGVARCHAR', false, null, null);
        $this->addColumn('archived_at', 'ArchivedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
            'symfony' =>  array (
  'form' => 'true',
  'filter' => 'true',
),
            'symfony_behaviors' =>  array (
),
        );
    } // getBehaviors()

} // SfSimpleCmsSlotArchiveTableMap
