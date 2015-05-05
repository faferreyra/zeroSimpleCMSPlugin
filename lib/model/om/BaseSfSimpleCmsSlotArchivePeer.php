<?php


/**
 * Base static class for performing query and update operations on the 'sf_simple_cms_slot_archive' table.
 *
 *
 *
 * @package propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BaseSfSimpleCmsSlotArchivePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'sf_simple_cms_slot_archive';

    /** the related Propel class for this table */
    const OM_CLASS = 'SfSimpleCmsSlotArchive';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SfSimpleCmsSlotArchiveTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the page_id field */
    const PAGE_ID = 'sf_simple_cms_slot_archive.page_id';

    /** the column name for the culture field */
    const CULTURE = 'sf_simple_cms_slot_archive.culture';

    /** the column name for the name field */
    const NAME = 'sf_simple_cms_slot_archive.name';

    /** the column name for the type field */
    const TYPE = 'sf_simple_cms_slot_archive.type';

    /** the column name for the value field */
    const VALUE = 'sf_simple_cms_slot_archive.value';

    /** the column name for the archived_at field */
    const ARCHIVED_AT = 'sf_simple_cms_slot_archive.archived_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SfSimpleCmsSlotArchive objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SfSimpleCmsSlotArchive[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SfSimpleCmsSlotArchivePeer::$fieldNames[SfSimpleCmsSlotArchivePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('PageId', 'Culture', 'Name', 'Type', 'Value', 'ArchivedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('pageId', 'culture', 'name', 'type', 'value', 'archivedAt', ),
        BasePeer::TYPE_COLNAME => array (SfSimpleCmsSlotArchivePeer::PAGE_ID, SfSimpleCmsSlotArchivePeer::CULTURE, SfSimpleCmsSlotArchivePeer::NAME, SfSimpleCmsSlotArchivePeer::TYPE, SfSimpleCmsSlotArchivePeer::VALUE, SfSimpleCmsSlotArchivePeer::ARCHIVED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PAGE_ID', 'CULTURE', 'NAME', 'TYPE', 'VALUE', 'ARCHIVED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('page_id', 'culture', 'name', 'type', 'value', 'archived_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SfSimpleCmsSlotArchivePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('PageId' => 0, 'Culture' => 1, 'Name' => 2, 'Type' => 3, 'Value' => 4, 'ArchivedAt' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('pageId' => 0, 'culture' => 1, 'name' => 2, 'type' => 3, 'value' => 4, 'archivedAt' => 5, ),
        BasePeer::TYPE_COLNAME => array (SfSimpleCmsSlotArchivePeer::PAGE_ID => 0, SfSimpleCmsSlotArchivePeer::CULTURE => 1, SfSimpleCmsSlotArchivePeer::NAME => 2, SfSimpleCmsSlotArchivePeer::TYPE => 3, SfSimpleCmsSlotArchivePeer::VALUE => 4, SfSimpleCmsSlotArchivePeer::ARCHIVED_AT => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PAGE_ID' => 0, 'CULTURE' => 1, 'NAME' => 2, 'TYPE' => 3, 'VALUE' => 4, 'ARCHIVED_AT' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('page_id' => 0, 'culture' => 1, 'name' => 2, 'type' => 3, 'value' => 4, 'archived_at' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = SfSimpleCmsSlotArchivePeer::getFieldNames($toType);
        $key = isset(SfSimpleCmsSlotArchivePeer::$fieldKeys[$fromType][$name]) ? SfSimpleCmsSlotArchivePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SfSimpleCmsSlotArchivePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, SfSimpleCmsSlotArchivePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SfSimpleCmsSlotArchivePeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. SfSimpleCmsSlotArchivePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SfSimpleCmsSlotArchivePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SfSimpleCmsSlotArchivePeer::PAGE_ID);
            $criteria->addSelectColumn(SfSimpleCmsSlotArchivePeer::CULTURE);
            $criteria->addSelectColumn(SfSimpleCmsSlotArchivePeer::NAME);
            $criteria->addSelectColumn(SfSimpleCmsSlotArchivePeer::TYPE);
            $criteria->addSelectColumn(SfSimpleCmsSlotArchivePeer::VALUE);
            $criteria->addSelectColumn(SfSimpleCmsSlotArchivePeer::ARCHIVED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.page_id');
            $criteria->addSelectColumn($alias . '.culture');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.value');
            $criteria->addSelectColumn($alias . '.archived_at');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SfSimpleCmsSlotArchivePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SfSimpleCmsSlotArchivePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SfSimpleCmsSlotArchivePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseSfSimpleCmsSlotArchivePeer', $criteria, $con);
        }

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return SfSimpleCmsSlotArchive
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SfSimpleCmsSlotArchivePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return SfSimpleCmsSlotArchivePeer::populateObjects(SfSimpleCmsSlotArchivePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SfSimpleCmsSlotArchivePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseSfSimpleCmsSlotArchivePeer', $criteria, $con);
        }


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param SfSimpleCmsSlotArchive $obj A SfSimpleCmsSlotArchive object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getPageId(), (string) $obj->getCulture(), (string) $obj->getName()));
            } // if key === null
            SfSimpleCmsSlotArchivePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A SfSimpleCmsSlotArchive object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SfSimpleCmsSlotArchive) {
                $key = serialize(array((string) $value->getPageId(), (string) $value->getCulture(), (string) $value->getName()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SfSimpleCmsSlotArchive object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SfSimpleCmsSlotArchivePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SfSimpleCmsSlotArchive Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SfSimpleCmsSlotArchivePeer::$instances[$key])) {
                return SfSimpleCmsSlotArchivePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (SfSimpleCmsSlotArchivePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SfSimpleCmsSlotArchivePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sf_simple_cms_slot_archive
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = SfSimpleCmsSlotArchivePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SfSimpleCmsSlotArchivePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SfSimpleCmsSlotArchivePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SfSimpleCmsSlotArchivePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (SfSimpleCmsSlotArchive object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SfSimpleCmsSlotArchivePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SfSimpleCmsSlotArchivePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SfSimpleCmsSlotArchivePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SfSimpleCmsSlotArchivePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SfSimpleCmsSlotArchivePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(SfSimpleCmsSlotArchivePeer::DATABASE_NAME)->getTable(SfSimpleCmsSlotArchivePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSfSimpleCmsSlotArchivePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSfSimpleCmsSlotArchivePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SfSimpleCmsSlotArchiveTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return SfSimpleCmsSlotArchivePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SfSimpleCmsSlotArchive or Criteria object.
     *
     * @param      mixed $values Criteria or SfSimpleCmsSlotArchive object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SfSimpleCmsSlotArchive object
        }


        // Set the correct dbName
        $criteria->setDbName(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a SfSimpleCmsSlotArchive or Criteria object.
     *
     * @param      mixed $values Criteria or SfSimpleCmsSlotArchive object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SfSimpleCmsSlotArchivePeer::PAGE_ID);
            $value = $criteria->remove(SfSimpleCmsSlotArchivePeer::PAGE_ID);
            if ($value) {
                $selectCriteria->add(SfSimpleCmsSlotArchivePeer::PAGE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SfSimpleCmsSlotArchivePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SfSimpleCmsSlotArchivePeer::CULTURE);
            $value = $criteria->remove(SfSimpleCmsSlotArchivePeer::CULTURE);
            if ($value) {
                $selectCriteria->add(SfSimpleCmsSlotArchivePeer::CULTURE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SfSimpleCmsSlotArchivePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SfSimpleCmsSlotArchivePeer::NAME);
            $value = $criteria->remove(SfSimpleCmsSlotArchivePeer::NAME);
            if ($value) {
                $selectCriteria->add(SfSimpleCmsSlotArchivePeer::NAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SfSimpleCmsSlotArchivePeer::TABLE_NAME);
            }

        } else { // $values is SfSimpleCmsSlotArchive object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sf_simple_cms_slot_archive table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SfSimpleCmsSlotArchivePeer::TABLE_NAME, $con, SfSimpleCmsSlotArchivePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SfSimpleCmsSlotArchivePeer::clearInstancePool();
            SfSimpleCmsSlotArchivePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SfSimpleCmsSlotArchive or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SfSimpleCmsSlotArchive object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SfSimpleCmsSlotArchivePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SfSimpleCmsSlotArchive) { // it's a model object
            // invalidate the cache for this single object
            SfSimpleCmsSlotArchivePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SfSimpleCmsSlotArchivePeer::PAGE_ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SfSimpleCmsSlotArchivePeer::CULTURE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SfSimpleCmsSlotArchivePeer::NAME, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SfSimpleCmsSlotArchivePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SfSimpleCmsSlotArchivePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SfSimpleCmsSlotArchive object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SfSimpleCmsSlotArchive $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SfSimpleCmsSlotArchivePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, SfSimpleCmsSlotArchivePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $page_id
     * @param   string $culture
     * @param   string $name
     * @param      PropelPDO $con
     * @return SfSimpleCmsSlotArchive
     */
    public static function retrieveByPK($page_id, $culture, $name, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $page_id, (string) $culture, (string) $name));
         if (null !== ($obj = SfSimpleCmsSlotArchivePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SfSimpleCmsSlotArchivePeer::DATABASE_NAME);
        $criteria->add(SfSimpleCmsSlotArchivePeer::PAGE_ID, $page_id);
        $criteria->add(SfSimpleCmsSlotArchivePeer::CULTURE, $culture);
        $criteria->add(SfSimpleCmsSlotArchivePeer::NAME, $name);
        $v = SfSimpleCmsSlotArchivePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
    // symfony behavior

    /**
     * Returns an array of arrays that contain columns in each unique index.
     *
     * @return array
     */
    static public function getUniqueColumnNames()
    {
      return array();
    }

    // symfony_behaviors behavior

    /**
     * Returns the name of the hook to call from inside the supplied method.
     *
     * @param string $method The calling method
     *
     * @return string A hook name for {@link sfMixer}
     *
     * @throws LogicException If the method name is not recognized
     */
    static private function getMixerPreSelectHook($method)
    {
      if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
      {
        return sprintf('BaseSfSimpleCmsSlotArchivePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BaseSfSimpleCmsSlotArchivePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSfSimpleCmsSlotArchivePeer::buildTableMap();

