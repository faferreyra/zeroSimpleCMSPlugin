<?php


/**
 * Base static class for performing query and update operations on the 'sf_simple_cms_page' table.
 *
 *
 *
 * @package propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BasesfSimpleCMSPagePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'sf_simple_cms_page';

    /** the related Propel class for this table */
    const OM_CLASS = 'sfSimpleCMSPage';

    /** the related TableMap class for this table */
    const TM_CLASS = 'sfSimpleCMSPageTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id field */
    const ID = 'sf_simple_cms_page.id';

    /** the column name for the slug field */
    const SLUG = 'sf_simple_cms_page.slug';

    /** the column name for the title field */
    const TITLE = 'sf_simple_cms_page.title';

    /** the column name for the title_short field */
    const TITLE_SHORT = 'sf_simple_cms_page.title_short';

    /** the column name for the topic_id field */
    const TOPIC_ID = 'sf_simple_cms_page.topic_id';

    /** the column name for the template field */
    const TEMPLATE = 'sf_simple_cms_page.template';

    /** the column name for the meta field */
    const META = 'sf_simple_cms_page.meta';

    /** the column name for the keywords field */
    const KEYWORDS = 'sf_simple_cms_page.keywords';

    /** the column name for the is_published field */
    const IS_PUBLISHED = 'sf_simple_cms_page.is_published';

    /** the column name for the is_secure field */
    const IS_SECURE = 'sf_simple_cms_page.is_secure';

    /** the column name for the tree_left field */
    const TREE_LEFT = 'sf_simple_cms_page.tree_left';

    /** the column name for the tree_right field */
    const TREE_RIGHT = 'sf_simple_cms_page.tree_right';

    /** the column name for the tree_level field */
    const TREE_LEVEL = 'sf_simple_cms_page.tree_level';

    /** the column name for the created_at field */
    const CREATED_AT = 'sf_simple_cms_page.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'sf_simple_cms_page.updated_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of sfSimpleCMSPage objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array sfSimpleCMSPage[]
     */
    public static $instances = array();


    // nested_set behavior

    /**
     * Left column for the set
     */
    const LEFT_COL = 'sf_simple_cms_page.tree_left';

    /**
     * Right column for the set
     */
    const RIGHT_COL = 'sf_simple_cms_page.tree_right';

    /**
     * Level column for the set
     */
    const LEVEL_COL = 'sf_simple_cms_page.tree_level';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. sfSimpleCMSPagePeer::$fieldNames[sfSimpleCMSPagePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Slug', 'Title', 'TitleShort', 'TopicId', 'Template', 'Meta', 'Keywords', 'IsPublished', 'IsSecure', 'TreeLeft', 'TreeRight', 'TreeLevel', 'CreatedAt', 'UpdatedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'slug', 'title', 'titleShort', 'topicId', 'template', 'meta', 'keywords', 'isPublished', 'isSecure', 'treeLeft', 'treeRight', 'treeLevel', 'createdAt', 'updatedAt', ),
        BasePeer::TYPE_COLNAME => array (sfSimpleCMSPagePeer::ID, sfSimpleCMSPagePeer::SLUG, sfSimpleCMSPagePeer::TITLE, sfSimpleCMSPagePeer::TITLE_SHORT, sfSimpleCMSPagePeer::TOPIC_ID, sfSimpleCMSPagePeer::TEMPLATE, sfSimpleCMSPagePeer::META, sfSimpleCMSPagePeer::KEYWORDS, sfSimpleCMSPagePeer::IS_PUBLISHED, sfSimpleCMSPagePeer::IS_SECURE, sfSimpleCMSPagePeer::TREE_LEFT, sfSimpleCMSPagePeer::TREE_RIGHT, sfSimpleCMSPagePeer::TREE_LEVEL, sfSimpleCMSPagePeer::CREATED_AT, sfSimpleCMSPagePeer::UPDATED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'SLUG', 'TITLE', 'TITLE_SHORT', 'TOPIC_ID', 'TEMPLATE', 'META', 'KEYWORDS', 'IS_PUBLISHED', 'IS_SECURE', 'TREE_LEFT', 'TREE_RIGHT', 'TREE_LEVEL', 'CREATED_AT', 'UPDATED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'slug', 'title', 'title_short', 'topic_id', 'template', 'meta', 'keywords', 'is_published', 'is_secure', 'tree_left', 'tree_right', 'tree_level', 'created_at', 'updated_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. sfSimpleCMSPagePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Slug' => 1, 'Title' => 2, 'TitleShort' => 3, 'TopicId' => 4, 'Template' => 5, 'Meta' => 6, 'Keywords' => 7, 'IsPublished' => 8, 'IsSecure' => 9, 'TreeLeft' => 10, 'TreeRight' => 11, 'TreeLevel' => 12, 'CreatedAt' => 13, 'UpdatedAt' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'slug' => 1, 'title' => 2, 'titleShort' => 3, 'topicId' => 4, 'template' => 5, 'meta' => 6, 'keywords' => 7, 'isPublished' => 8, 'isSecure' => 9, 'treeLeft' => 10, 'treeRight' => 11, 'treeLevel' => 12, 'createdAt' => 13, 'updatedAt' => 14, ),
        BasePeer::TYPE_COLNAME => array (sfSimpleCMSPagePeer::ID => 0, sfSimpleCMSPagePeer::SLUG => 1, sfSimpleCMSPagePeer::TITLE => 2, sfSimpleCMSPagePeer::TITLE_SHORT => 3, sfSimpleCMSPagePeer::TOPIC_ID => 4, sfSimpleCMSPagePeer::TEMPLATE => 5, sfSimpleCMSPagePeer::META => 6, sfSimpleCMSPagePeer::KEYWORDS => 7, sfSimpleCMSPagePeer::IS_PUBLISHED => 8, sfSimpleCMSPagePeer::IS_SECURE => 9, sfSimpleCMSPagePeer::TREE_LEFT => 10, sfSimpleCMSPagePeer::TREE_RIGHT => 11, sfSimpleCMSPagePeer::TREE_LEVEL => 12, sfSimpleCMSPagePeer::CREATED_AT => 13, sfSimpleCMSPagePeer::UPDATED_AT => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'SLUG' => 1, 'TITLE' => 2, 'TITLE_SHORT' => 3, 'TOPIC_ID' => 4, 'TEMPLATE' => 5, 'META' => 6, 'KEYWORDS' => 7, 'IS_PUBLISHED' => 8, 'IS_SECURE' => 9, 'TREE_LEFT' => 10, 'TREE_RIGHT' => 11, 'TREE_LEVEL' => 12, 'CREATED_AT' => 13, 'UPDATED_AT' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'slug' => 1, 'title' => 2, 'title_short' => 3, 'topic_id' => 4, 'template' => 5, 'meta' => 6, 'keywords' => 7, 'is_published' => 8, 'is_secure' => 9, 'tree_left' => 10, 'tree_right' => 11, 'tree_level' => 12, 'created_at' => 13, 'updated_at' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = sfSimpleCMSPagePeer::getFieldNames($toType);
        $key = isset(sfSimpleCMSPagePeer::$fieldKeys[$fromType][$name]) ? sfSimpleCMSPagePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(sfSimpleCMSPagePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, sfSimpleCMSPagePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return sfSimpleCMSPagePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. sfSimpleCMSPagePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(sfSimpleCMSPagePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::ID);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::SLUG);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TITLE);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TITLE_SHORT);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TOPIC_ID);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TEMPLATE);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::META);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::KEYWORDS);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::IS_PUBLISHED);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::IS_SECURE);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TREE_LEFT);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TREE_RIGHT);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::TREE_LEVEL);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::CREATED_AT);
            $criteria->addSelectColumn(sfSimpleCMSPagePeer::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.slug');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.title_short');
            $criteria->addSelectColumn($alias . '.topic_id');
            $criteria->addSelectColumn($alias . '.template');
            $criteria->addSelectColumn($alias . '.meta');
            $criteria->addSelectColumn($alias . '.keywords');
            $criteria->addSelectColumn($alias . '.is_published');
            $criteria->addSelectColumn($alias . '.is_secure');
            $criteria->addSelectColumn($alias . '.tree_left');
            $criteria->addSelectColumn($alias . '.tree_right');
            $criteria->addSelectColumn($alias . '.tree_level');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
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
        $criteria->setPrimaryTableName(sfSimpleCMSPagePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            sfSimpleCMSPagePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(sfSimpleCMSPagePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BasesfSimpleCMSPagePeer', $criteria, $con);
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
     * @return sfSimpleCMSPage
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = sfSimpleCMSPagePeer::doSelect($critcopy, $con);
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
        return sfSimpleCMSPagePeer::populateObjects(sfSimpleCMSPagePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            sfSimpleCMSPagePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(sfSimpleCMSPagePeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BasesfSimpleCMSPagePeer', $criteria, $con);
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
     * @param sfSimpleCMSPage $obj A sfSimpleCMSPage object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            sfSimpleCMSPagePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A sfSimpleCMSPage object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof sfSimpleCMSPage) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or sfSimpleCMSPage object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(sfSimpleCMSPagePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return sfSimpleCMSPage Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(sfSimpleCMSPagePeer::$instances[$key])) {
                return sfSimpleCMSPagePeer::$instances[$key];
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
        foreach (sfSimpleCMSPagePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        sfSimpleCMSPagePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sf_simple_cms_page
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in sfSimpleCMSSlotPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        sfSimpleCMSSlotPeer::clearInstancePool();
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
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
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

        return (int) $row[$startcol];
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
        $cls = sfSimpleCMSPagePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = sfSimpleCMSPagePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = sfSimpleCMSPagePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                sfSimpleCMSPagePeer::addInstanceToPool($obj, $key);
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
     * @return array (sfSimpleCMSPage object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = sfSimpleCMSPagePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = sfSimpleCMSPagePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + sfSimpleCMSPagePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = sfSimpleCMSPagePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            sfSimpleCMSPagePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(sfSimpleCMSPagePeer::DATABASE_NAME)->getTable(sfSimpleCMSPagePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasesfSimpleCMSPagePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasesfSimpleCMSPagePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \sfSimpleCMSPageTableMap());
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
        return sfSimpleCMSPagePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a sfSimpleCMSPage or Criteria object.
     *
     * @param      mixed $values Criteria or sfSimpleCMSPage object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from sfSimpleCMSPage object
        }

        if ($criteria->containsKey(sfSimpleCMSPagePeer::ID) && $criteria->keyContainsValue(sfSimpleCMSPagePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.sfSimpleCMSPagePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(sfSimpleCMSPagePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a sfSimpleCMSPage or Criteria object.
     *
     * @param      mixed $values Criteria or sfSimpleCMSPage object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(sfSimpleCMSPagePeer::ID);
            $value = $criteria->remove(sfSimpleCMSPagePeer::ID);
            if ($value) {
                $selectCriteria->add(sfSimpleCMSPagePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(sfSimpleCMSPagePeer::TABLE_NAME);
            }

        } else { // $values is sfSimpleCMSPage object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(sfSimpleCMSPagePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sf_simple_cms_page table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += sfSimpleCMSPagePeer::doOnDeleteCascade(new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(sfSimpleCMSPagePeer::TABLE_NAME, $con, sfSimpleCMSPagePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            sfSimpleCMSPagePeer::clearInstancePool();
            sfSimpleCMSPagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a sfSimpleCMSPage or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or sfSimpleCMSPage object or primary key or array of primary keys
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
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof sfSimpleCMSPage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
            $criteria->add(sfSimpleCMSPagePeer::ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(sfSimpleCMSPagePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += sfSimpleCMSPagePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                sfSimpleCMSPagePeer::clearInstancePool();
            } elseif ($values instanceof sfSimpleCMSPage) { // it's a model object
                sfSimpleCMSPagePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    sfSimpleCMSPagePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            sfSimpleCMSPagePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = sfSimpleCMSPagePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related sfSimpleCMSSlot objects
            $criteria = new Criteria(sfSimpleCMSSlotPeer::DATABASE_NAME);

            $criteria->add(sfSimpleCMSSlotPeer::PAGE_ID, $obj->getId());
            $affectedRows += sfSimpleCMSSlotPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given sfSimpleCMSPage object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param sfSimpleCMSPage $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(sfSimpleCMSPagePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(sfSimpleCMSPagePeer::TABLE_NAME);

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

        return BasePeer::doValidate(sfSimpleCMSPagePeer::DATABASE_NAME, sfSimpleCMSPagePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return sfSimpleCMSPage
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = sfSimpleCMSPagePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $criteria->add(sfSimpleCMSPagePeer::ID, $pk);

        $v = sfSimpleCMSPagePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return sfSimpleCMSPage[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
            $criteria->add(sfSimpleCMSPagePeer::ID, $pks, Criteria::IN);
            $objs = sfSimpleCMSPagePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // nested_set behavior

    /**
     * Returns the root node for a given scope
     *
     * @param      PropelPDO $con	Connection to use.
     * @return     sfSimpleCMSPage			Propel object for root node
     */
    public static function retrieveRoot(PropelPDO $con = null)
    {
        $c = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $c->add(sfSimpleCMSPagePeer::LEFT_COL, 1, Criteria::EQUAL);

        return sfSimpleCMSPagePeer::doSelectOne($c, $con);
    }

    /**
     * Returns the whole tree node for a given scope
     *
     * @param      Criteria $criteria	Optional Criteria to filter the query
     * @param      PropelPDO $con	Connection to use.
     * @return     sfSimpleCMSPage			Propel object for root node
     */
    public static function retrieveTree(Criteria $criteria = null, PropelPDO $con = null)
    {
        if ($criteria === null) {
            $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        }
        $criteria->addAscendingOrderByColumn(sfSimpleCMSPagePeer::LEFT_COL);

        return sfSimpleCMSPagePeer::doSelect($criteria, $con);
    }

    /**
     * Tests if node is valid
     *
     * @param      sfSimpleCMSPage $node	Propel object for src node
     * @return     bool
     */
    public static function isValid(sfSimpleCMSPage $node = null)
    {
        if (is_object($node) && $node->getRightValue() > $node->getLeftValue()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete an entire tree
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     int  The number of deleted nodes
     */
    public static function deleteTree(PropelPDO $con = null)
    {

        return sfSimpleCMSPagePeer::doDeleteAll($con);
    }

    /**
     * Adds $delta to all L and R values that are >= $first and <= $last.
     * '$delta' can also be negative.
     *
     * @param      int $delta		Value to be shifted by, can be negative
     * @param      int $first		First node to be shifted
     * @param      int $last			Last node to be shifted (optional)
     * @param      PropelPDO $con		Connection to use.
     */
    public static function shiftRLValues($delta, $first, $last = null, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        // Shift left column values
        $whereCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $criterion = $whereCriteria->getNewCriterion(sfSimpleCMSPagePeer::LEFT_COL, $first, Criteria::GREATER_EQUAL);
        if (null !== $last) {
            $criterion->addAnd($whereCriteria->getNewCriterion(sfSimpleCMSPagePeer::LEFT_COL, $last, Criteria::LESS_EQUAL));
        }
        $whereCriteria->add($criterion);

        $valuesCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $valuesCriteria->add(sfSimpleCMSPagePeer::LEFT_COL, array('raw' => sfSimpleCMSPagePeer::LEFT_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);

        // Shift right column values
        $whereCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $criterion = $whereCriteria->getNewCriterion(sfSimpleCMSPagePeer::RIGHT_COL, $first, Criteria::GREATER_EQUAL);
        if (null !== $last) {
            $criterion->addAnd($whereCriteria->getNewCriterion(sfSimpleCMSPagePeer::RIGHT_COL, $last, Criteria::LESS_EQUAL));
        }
        $whereCriteria->add($criterion);

        $valuesCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $valuesCriteria->add(sfSimpleCMSPagePeer::RIGHT_COL, array('raw' => sfSimpleCMSPagePeer::RIGHT_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
    }

    /**
     * Adds $delta to level for nodes having left value >= $first and right value <= $last.
     * '$delta' can also be negative.
     *
     * @param      int $delta		Value to be shifted by, can be negative
     * @param      int $first		First node to be shifted
     * @param      int $last			Last node to be shifted
     * @param      PropelPDO $con		Connection to use.
     */
    public static function shiftLevel($delta, $first, $last, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $whereCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $whereCriteria->add(sfSimpleCMSPagePeer::LEFT_COL, $first, Criteria::GREATER_EQUAL);
        $whereCriteria->add(sfSimpleCMSPagePeer::RIGHT_COL, $last, Criteria::LESS_EQUAL);

        $valuesCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $valuesCriteria->add(sfSimpleCMSPagePeer::LEVEL_COL, array('raw' => sfSimpleCMSPagePeer::LEVEL_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
    }

    /**
     * Reload all already loaded nodes to sync them with updated db
     *
     * @param      sfSimpleCMSPage $prune		Object to prune from the update
     * @param      PropelPDO $con		Connection to use.
     */
    public static function updateLoadedNodes($prune = null, PropelPDO $con = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            $keys = array();
            foreach (sfSimpleCMSPagePeer::$instances as $obj) {
                if (!$prune || !$prune->equals($obj)) {
                    $keys[] = $obj->getPrimaryKey();
                }
            }

            if (!empty($keys)) {
                // We don't need to alter the object instance pool; we're just modifying these ones
                // already in the pool.
                $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
                $criteria->add(sfSimpleCMSPagePeer::ID, $keys, Criteria::IN);
                $stmt = sfSimpleCMSPagePeer::doSelectStmt($criteria, $con);
                while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                    $key = sfSimpleCMSPagePeer::getPrimaryKeyHashFromRow($row, 0);
                    if (null !== ($object = sfSimpleCMSPagePeer::getInstanceFromPool($key))) {
                        $object->setLeftValue($row[10]);
                        $object->setRightValue($row[11]);
                        $object->setLevel($row[12]);
                        $object->clearNestedSetChildren();
                    }
                }
                $stmt->closeCursor();
            }
        }
    }

    /**
     * Update the tree to allow insertion of a leaf at the specified position
     *
     * @param      int $left	left column value
     * @param      mixed $prune	Object to prune from the shift
     * @param      PropelPDO $con	Connection to use.
     */
    public static function makeRoomForLeaf($left, $prune = null, PropelPDO $con = null)
    {
        // Update database nodes
        sfSimpleCMSPagePeer::shiftRLValues(2, $left, null, $con);

        // Update all loaded nodes
        sfSimpleCMSPagePeer::updateLoadedNodes($prune, $con);
    }

    /**
     * Update the tree to allow insertion of a leaf at the specified position
     *
     * @param      PropelPDO $con	Connection to use.
     */
    public static function fixLevels(PropelPDO $con = null)
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(sfSimpleCMSPagePeer::LEFT_COL);
        $stmt = sfSimpleCMSPagePeer::doSelectStmt($c, $con);

        // set the class once to avoid overhead in the loop
        $cls = sfSimpleCMSPagePeer::getOMClass(false);
        $level = null;
        // iterate over the statement
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {

            // hydrate object
            $key = sfSimpleCMSPagePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null === ($obj = sfSimpleCMSPagePeer::getInstanceFromPool($key))) {
                $obj = new $cls();
                $obj->hydrate($row);
                sfSimpleCMSPagePeer::addInstanceToPool($obj, $key);
            }

            // compute level
            // Algorithm shamelessly stolen from sfPropelActAsNestedSetBehaviorPlugin
            // Probably authored by Tristan Rivoallan
            if ($level === null) {
                $level = 0;
                $i = 0;
                $prev = array($obj->getRightValue());
            } else {
                while ($obj->getRightValue() > $prev[$i]) {
                    $i--;
                }
                $level = ++$i;
                $prev[$i] = $obj->getRightValue();
            }

            // update level in node if necessary
            if ($obj->getLevel() !== $level) {
                $obj->setLevel($level);
                $obj->save($con);
            }
        }
        $stmt->closeCursor();
    }

    /**
     * Updates all scope values for items that has negative left (<=0) values.
     *
     * @param      mixed     $scope
     * @param      PropelPDO $con	Connection to use.
     */
    public static function setNegativeScope($scope, PropelPDO $con = null)
    {
        //adjust scope value to $scope
        $whereCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $whereCriteria->add(sfSimpleCMSPagePeer::LEFT_COL, 0, Criteria::LESS_EQUAL);

        $valuesCriteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $valuesCriteria->add(sfSimpleCMSPagePeer::SCOPE_COL, $scope, Criteria::EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
    }

    // symfony behavior

    /**
     * Returns an array of arrays that contain columns in each unique index.
     *
     * @return array
     */
    static public function getUniqueColumnNames()
    {
      return array(array('slug'), array('title'), array('title_short'));
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
        return sprintf('BasesfSimpleCMSPagePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BasesfSimpleCMSPagePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasesfSimpleCMSPagePeer::buildTableMap();

