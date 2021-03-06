<?php


/**
 * Base class that represents a row from the 'sf_simple_cms_page' table.
 *
 *
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BasesfSimpleCMSPage extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'sfSimpleCMSPagePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        sfSimpleCMSPagePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the slug field.
     * @var        string
     */
    protected $slug;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the title_short field.
     * @var        string
     */
    protected $title_short;

    /**
     * The value for the topic_id field.
     * @var        int
     */
    protected $topic_id;

    /**
     * The value for the template field.
     * @var        string
     */
    protected $template;

    /**
     * The value for the meta field.
     * @var        string
     */
    protected $meta;

    /**
     * The value for the keywords field.
     * @var        string
     */
    protected $keywords;

    /**
     * The value for the is_published field.
     * @var        boolean
     */
    protected $is_published;

    /**
     * The value for the is_secure field.
     * @var        boolean
     */
    protected $is_secure;

    /**
     * The value for the tree_left field.
     * @var        int
     */
    protected $tree_left;

    /**
     * The value for the tree_right field.
     * @var        int
     */
    protected $tree_right;

    /**
     * The value for the tree_level field.
     * @var        int
     */
    protected $tree_level;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        PropelObjectCollection|sfSimpleCMSSlot[] Collection to store aggregation of sfSimpleCMSSlot objects.
     */
    protected $collsfSimpleCMSSlots;
    protected $collsfSimpleCMSSlotsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    // archivable behavior
    protected $archiveOnDelete = true;

    // nested_set behavior

    /**
     * Queries to be executed in the save transaction
     * @var        array
     */
    protected $nestedSetQueries = array();

    /**
     * Internal cache for children nodes
     * @var        null|PropelObjectCollection
     */
    protected $collNestedSetChildren = null;

    /**
     * Internal cache for parent node
     * @var        null|sfSimpleCMSPage
     */
    protected $aNestedSetParent = null;


    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sfSimpleCMSSlotsScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [slug] column value.
     *
     * @return string
     */
    public function getSlug()
    {

        return $this->slug;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [title_short] column value.
     *
     * @return string
     */
    public function getTitleShort()
    {

        return $this->title_short;
    }

    /**
     * Get the [topic_id] column value.
     *
     * @return int
     */
    public function getTopicId()
    {

        return $this->topic_id;
    }

    /**
     * Get the [template] column value.
     *
     * @return string
     */
    public function getTemplate()
    {

        return $this->template;
    }

    /**
     * Get the [meta] column value.
     *
     * @return string
     */
    public function getMeta()
    {

        return $this->meta;
    }

    /**
     * Get the [keywords] column value.
     *
     * @return string
     */
    public function getKeywords()
    {

        return $this->keywords;
    }

    /**
     * Get the [is_published] column value.
     *
     * @return boolean
     */
    public function getIsPublished()
    {

        return $this->is_published;
    }

    /**
     * Get the [is_secure] column value.
     *
     * @return boolean
     */
    public function getIsSecure()
    {

        return $this->is_secure;
    }

    /**
     * Get the [tree_left] column value.
     *
     * @return int
     */
    public function getTreeLeft()
    {

        return $this->tree_left;
    }

    /**
     * Get the [tree_right] column value.
     *
     * @return int
     */
    public function getTreeRight()
    {

        return $this->tree_right;
    }

    /**
     * Get the [tree_level] column value.
     *
     * @return int
     */
    public function getTreeLevel()
    {

        return $this->tree_level;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [slug] column.
     *
     * @param  string $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setSlug($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->slug !== $v) {
            $this->slug = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::SLUG;
        }


        return $this;
    } // setSlug()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [title_short] column.
     *
     * @param  string $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTitleShort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title_short !== $v) {
            $this->title_short = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TITLE_SHORT;
        }


        return $this;
    } // setTitleShort()

    /**
     * Set the value of [topic_id] column.
     *
     * @param  int $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTopicId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->topic_id !== $v) {
            $this->topic_id = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TOPIC_ID;
        }


        return $this;
    } // setTopicId()

    /**
     * Set the value of [template] column.
     *
     * @param  string $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTemplate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->template !== $v) {
            $this->template = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TEMPLATE;
        }


        return $this;
    } // setTemplate()

    /**
     * Set the value of [meta] column.
     *
     * @param  string $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setMeta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->meta !== $v) {
            $this->meta = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::META;
        }


        return $this;
    } // setMeta()

    /**
     * Set the value of [keywords] column.
     *
     * @param  string $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setKeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->keywords !== $v) {
            $this->keywords = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::KEYWORDS;
        }


        return $this;
    } // setKeywords()

    /**
     * Sets the value of the [is_published] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setIsPublished($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_published !== $v) {
            $this->is_published = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::IS_PUBLISHED;
        }


        return $this;
    } // setIsPublished()

    /**
     * Sets the value of the [is_secure] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setIsSecure($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_secure !== $v) {
            $this->is_secure = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::IS_SECURE;
        }


        return $this;
    } // setIsSecure()

    /**
     * Set the value of [tree_left] column.
     *
     * @param  int $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTreeLeft($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tree_left !== $v) {
            $this->tree_left = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TREE_LEFT;
        }


        return $this;
    } // setTreeLeft()

    /**
     * Set the value of [tree_right] column.
     *
     * @param  int $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTreeRight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tree_right !== $v) {
            $this->tree_right = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TREE_RIGHT;
        }


        return $this;
    } // setTreeRight()

    /**
     * Set the value of [tree_level] column.
     *
     * @param  int $v new value
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setTreeLevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tree_level !== $v) {
            $this->tree_level = $v;
            $this->modifiedColumns[] = sfSimpleCMSPagePeer::TREE_LEVEL;
        }


        return $this;
    } // setTreeLevel()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = sfSimpleCMSPagePeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = sfSimpleCMSPagePeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->slug = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->title_short = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->topic_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->template = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->meta = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->keywords = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->is_published = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->is_secure = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->tree_left = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->tree_right = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->tree_level = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->created_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->updated_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = sfSimpleCMSPagePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating sfSimpleCMSPage object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = sfSimpleCMSPagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collsfSimpleCMSSlots = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = sfSimpleCMSPageQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // archivable behavior
            if ($ret) {
                if ($this->archiveOnDelete) {
                    // do nothing yet. The object will be archived later when calling sfSimpleCMSPageQuery::delete().
                } else {
                    $deleteQuery->setArchiveOnDelete(false);
                    $this->archiveOnDelete = true;
                }
            }

            // nested_set behavior
            if ($this->isRoot()) {
                throw new PropelException('Deletion of a root node is disabled for nested sets. Use sfSimpleCMSPagePeer::deleteTree() instead to delete an entire tree');
            }

            if ($this->isInTree()) {
                $this->deleteDescendants($con);
            }

            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BasesfSimpleCMSPage:delete:pre') as $callable)
            {
              if (call_user_func($callable, $this, $con))
              {
                $con->commit();
                return;
              }
            }

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // nested_set behavior
                if ($this->isInTree()) {
                    // fill up the room that was used by the node
                    sfSimpleCMSPagePeer::shiftRLValues(-2, $this->getRightValue() + 1, null, $con);
                }

                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BasesfSimpleCMSPage:delete:post') as $callable)
                {
                  call_user_func($callable, $this, $con);
                }

                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // nested_set behavior
            if ($this->isNew() && $this->isRoot()) {
                // check if no other root exist in, the tree
                $nbRoots = sfSimpleCMSPageQuery::create()
                    ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, 1, Criteria::EQUAL)
                    ->count($con);
                if ($nbRoots > 0) {
                        throw new PropelException('A root node already exists in this tree. To allow multiple root nodes, add the `use_scope` parameter in the nested_set behavior tag.');
                }
            }
            $this->processNestedSetQueries($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BasesfSimpleCMSPage:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

            // symfony_timestampable behavior
            if ($this->isModified() && !$this->isColumnModified(sfSimpleCMSPagePeer::UPDATED_AT))
            {
                $this->setUpdatedAt(time());
            }
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(sfSimpleCMSPagePeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(sfSimpleCMSPagePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
                // symfony_timestampable behavior
                if (!$this->isColumnModified(sfSimpleCMSPagePeer::CREATED_AT))
                {
                  $this->setCreatedAt(time());
                }

            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(sfSimpleCMSPagePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BasesfSimpleCMSPage:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                sfSimpleCMSPagePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->sfSimpleCMSSlotsScheduledForDeletion !== null) {
                if (!$this->sfSimpleCMSSlotsScheduledForDeletion->isEmpty()) {
                    sfSimpleCMSSlotQuery::create()
                        ->filterByPrimaryKeys($this->sfSimpleCMSSlotsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sfSimpleCMSSlotsScheduledForDeletion = null;
                }
            }

            if ($this->collsfSimpleCMSSlots !== null) {
                foreach ($this->collsfSimpleCMSSlots as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = sfSimpleCMSPagePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . sfSimpleCMSPagePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(sfSimpleCMSPagePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::SLUG)) {
            $modifiedColumns[':p' . $index++]  = '`slug`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TITLE_SHORT)) {
            $modifiedColumns[':p' . $index++]  = '`title_short`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TOPIC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`topic_id`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TEMPLATE)) {
            $modifiedColumns[':p' . $index++]  = '`template`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::META)) {
            $modifiedColumns[':p' . $index++]  = '`meta`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`keywords`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::IS_PUBLISHED)) {
            $modifiedColumns[':p' . $index++]  = '`is_published`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::IS_SECURE)) {
            $modifiedColumns[':p' . $index++]  = '`is_secure`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TREE_LEFT)) {
            $modifiedColumns[':p' . $index++]  = '`tree_left`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TREE_RIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`tree_right`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TREE_LEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`tree_level`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(sfSimpleCMSPagePeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `sf_simple_cms_page` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`slug`':
                        $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
                        break;
                    case '`title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`title_short`':
                        $stmt->bindValue($identifier, $this->title_short, PDO::PARAM_STR);
                        break;
                    case '`topic_id`':
                        $stmt->bindValue($identifier, $this->topic_id, PDO::PARAM_INT);
                        break;
                    case '`template`':
                        $stmt->bindValue($identifier, $this->template, PDO::PARAM_STR);
                        break;
                    case '`meta`':
                        $stmt->bindValue($identifier, $this->meta, PDO::PARAM_STR);
                        break;
                    case '`keywords`':
                        $stmt->bindValue($identifier, $this->keywords, PDO::PARAM_STR);
                        break;
                    case '`is_published`':
                        $stmt->bindValue($identifier, (int) $this->is_published, PDO::PARAM_INT);
                        break;
                    case '`is_secure`':
                        $stmt->bindValue($identifier, (int) $this->is_secure, PDO::PARAM_INT);
                        break;
                    case '`tree_left`':
                        $stmt->bindValue($identifier, $this->tree_left, PDO::PARAM_INT);
                        break;
                    case '`tree_right`':
                        $stmt->bindValue($identifier, $this->tree_right, PDO::PARAM_INT);
                        break;
                    case '`tree_level`':
                        $stmt->bindValue($identifier, $this->tree_level, PDO::PARAM_INT);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = sfSimpleCMSPagePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collsfSimpleCMSSlots !== null) {
                    foreach ($this->collsfSimpleCMSSlots as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = sfSimpleCMSPagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getSlug();
                break;
            case 2:
                return $this->getTitle();
                break;
            case 3:
                return $this->getTitleShort();
                break;
            case 4:
                return $this->getTopicId();
                break;
            case 5:
                return $this->getTemplate();
                break;
            case 6:
                return $this->getMeta();
                break;
            case 7:
                return $this->getKeywords();
                break;
            case 8:
                return $this->getIsPublished();
                break;
            case 9:
                return $this->getIsSecure();
                break;
            case 10:
                return $this->getTreeLeft();
                break;
            case 11:
                return $this->getTreeRight();
                break;
            case 12:
                return $this->getTreeLevel();
                break;
            case 13:
                return $this->getCreatedAt();
                break;
            case 14:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['sfSimpleCMSPage'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['sfSimpleCMSPage'][$this->getPrimaryKey()] = true;
        $keys = sfSimpleCMSPagePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getSlug(),
            $keys[2] => $this->getTitle(),
            $keys[3] => $this->getTitleShort(),
            $keys[4] => $this->getTopicId(),
            $keys[5] => $this->getTemplate(),
            $keys[6] => $this->getMeta(),
            $keys[7] => $this->getKeywords(),
            $keys[8] => $this->getIsPublished(),
            $keys[9] => $this->getIsSecure(),
            $keys[10] => $this->getTreeLeft(),
            $keys[11] => $this->getTreeRight(),
            $keys[12] => $this->getTreeLevel(),
            $keys[13] => $this->getCreatedAt(),
            $keys[14] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collsfSimpleCMSSlots) {
                $result['sfSimpleCMSSlots'] = $this->collsfSimpleCMSSlots->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = sfSimpleCMSPagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setSlug($value);
                break;
            case 2:
                $this->setTitle($value);
                break;
            case 3:
                $this->setTitleShort($value);
                break;
            case 4:
                $this->setTopicId($value);
                break;
            case 5:
                $this->setTemplate($value);
                break;
            case 6:
                $this->setMeta($value);
                break;
            case 7:
                $this->setKeywords($value);
                break;
            case 8:
                $this->setIsPublished($value);
                break;
            case 9:
                $this->setIsSecure($value);
                break;
            case 10:
                $this->setTreeLeft($value);
                break;
            case 11:
                $this->setTreeRight($value);
                break;
            case 12:
                $this->setTreeLevel($value);
                break;
            case 13:
                $this->setCreatedAt($value);
                break;
            case 14:
                $this->setUpdatedAt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = sfSimpleCMSPagePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSlug($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTitleShort($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTopicId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTemplate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMeta($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setKeywords($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIsPublished($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIsSecure($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTreeLeft($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTreeRight($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTreeLevel($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCreatedAt($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUpdatedAt($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);

        if ($this->isColumnModified(sfSimpleCMSPagePeer::ID)) $criteria->add(sfSimpleCMSPagePeer::ID, $this->id);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::SLUG)) $criteria->add(sfSimpleCMSPagePeer::SLUG, $this->slug);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TITLE)) $criteria->add(sfSimpleCMSPagePeer::TITLE, $this->title);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TITLE_SHORT)) $criteria->add(sfSimpleCMSPagePeer::TITLE_SHORT, $this->title_short);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TOPIC_ID)) $criteria->add(sfSimpleCMSPagePeer::TOPIC_ID, $this->topic_id);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TEMPLATE)) $criteria->add(sfSimpleCMSPagePeer::TEMPLATE, $this->template);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::META)) $criteria->add(sfSimpleCMSPagePeer::META, $this->meta);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::KEYWORDS)) $criteria->add(sfSimpleCMSPagePeer::KEYWORDS, $this->keywords);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::IS_PUBLISHED)) $criteria->add(sfSimpleCMSPagePeer::IS_PUBLISHED, $this->is_published);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::IS_SECURE)) $criteria->add(sfSimpleCMSPagePeer::IS_SECURE, $this->is_secure);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TREE_LEFT)) $criteria->add(sfSimpleCMSPagePeer::TREE_LEFT, $this->tree_left);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TREE_RIGHT)) $criteria->add(sfSimpleCMSPagePeer::TREE_RIGHT, $this->tree_right);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::TREE_LEVEL)) $criteria->add(sfSimpleCMSPagePeer::TREE_LEVEL, $this->tree_level);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::CREATED_AT)) $criteria->add(sfSimpleCMSPagePeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(sfSimpleCMSPagePeer::UPDATED_AT)) $criteria->add(sfSimpleCMSPagePeer::UPDATED_AT, $this->updated_at);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(sfSimpleCMSPagePeer::DATABASE_NAME);
        $criteria->add(sfSimpleCMSPagePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of sfSimpleCMSPage (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSlug($this->getSlug());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setTitleShort($this->getTitleShort());
        $copyObj->setTopicId($this->getTopicId());
        $copyObj->setTemplate($this->getTemplate());
        $copyObj->setMeta($this->getMeta());
        $copyObj->setKeywords($this->getKeywords());
        $copyObj->setIsPublished($this->getIsPublished());
        $copyObj->setIsSecure($this->getIsSecure());
        $copyObj->setTreeLeft($this->getTreeLeft());
        $copyObj->setTreeRight($this->getTreeRight());
        $copyObj->setTreeLevel($this->getTreeLevel());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getsfSimpleCMSSlots() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addsfSimpleCMSSlot($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return sfSimpleCMSPage Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return sfSimpleCMSPagePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new sfSimpleCMSPagePeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('sfSimpleCMSSlot' == $relationName) {
            $this->initsfSimpleCMSSlots();
        }
    }

    /**
     * Clears out the collsfSimpleCMSSlots collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return sfSimpleCMSPage The current object (for fluent API support)
     * @see        addsfSimpleCMSSlots()
     */
    public function clearsfSimpleCMSSlots()
    {
        $this->collsfSimpleCMSSlots = null; // important to set this to null since that means it is uninitialized
        $this->collsfSimpleCMSSlotsPartial = null;

        return $this;
    }

    /**
     * reset is the collsfSimpleCMSSlots collection loaded partially
     *
     * @return void
     */
    public function resetPartialsfSimpleCMSSlots($v = true)
    {
        $this->collsfSimpleCMSSlotsPartial = $v;
    }

    /**
     * Initializes the collsfSimpleCMSSlots collection.
     *
     * By default this just sets the collsfSimpleCMSSlots collection to an empty array (like clearcollsfSimpleCMSSlots());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initsfSimpleCMSSlots($overrideExisting = true)
    {
        if (null !== $this->collsfSimpleCMSSlots && !$overrideExisting) {
            return;
        }
        $this->collsfSimpleCMSSlots = new PropelObjectCollection();
        $this->collsfSimpleCMSSlots->setModel('sfSimpleCMSSlot');
    }

    /**
     * Gets an array of sfSimpleCMSSlot objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this sfSimpleCMSPage is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|sfSimpleCMSSlot[] List of sfSimpleCMSSlot objects
     * @throws PropelException
     */
    public function getsfSimpleCMSSlots($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collsfSimpleCMSSlotsPartial && !$this->isNew();
        if (null === $this->collsfSimpleCMSSlots || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collsfSimpleCMSSlots) {
                // return empty collection
                $this->initsfSimpleCMSSlots();
            } else {
                $collsfSimpleCMSSlots = sfSimpleCMSSlotQuery::create(null, $criteria)
                    ->filterBysfSimpleCMSPage($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collsfSimpleCMSSlotsPartial && count($collsfSimpleCMSSlots)) {
                      $this->initsfSimpleCMSSlots(false);

                      foreach ($collsfSimpleCMSSlots as $obj) {
                        if (false == $this->collsfSimpleCMSSlots->contains($obj)) {
                          $this->collsfSimpleCMSSlots->append($obj);
                        }
                      }

                      $this->collsfSimpleCMSSlotsPartial = true;
                    }

                    $collsfSimpleCMSSlots->getInternalIterator()->rewind();

                    return $collsfSimpleCMSSlots;
                }

                if ($partial && $this->collsfSimpleCMSSlots) {
                    foreach ($this->collsfSimpleCMSSlots as $obj) {
                        if ($obj->isNew()) {
                            $collsfSimpleCMSSlots[] = $obj;
                        }
                    }
                }

                $this->collsfSimpleCMSSlots = $collsfSimpleCMSSlots;
                $this->collsfSimpleCMSSlotsPartial = false;
            }
        }

        return $this->collsfSimpleCMSSlots;
    }

    /**
     * Sets a collection of sfSimpleCMSSlot objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sfSimpleCMSSlots A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setsfSimpleCMSSlots(PropelCollection $sfSimpleCMSSlots, PropelPDO $con = null)
    {
        $sfSimpleCMSSlotsToDelete = $this->getsfSimpleCMSSlots(new Criteria(), $con)->diff($sfSimpleCMSSlots);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->sfSimpleCMSSlotsScheduledForDeletion = clone $sfSimpleCMSSlotsToDelete;

        foreach ($sfSimpleCMSSlotsToDelete as $sfSimpleCMSSlotRemoved) {
            $sfSimpleCMSSlotRemoved->setsfSimpleCMSPage(null);
        }

        $this->collsfSimpleCMSSlots = null;
        foreach ($sfSimpleCMSSlots as $sfSimpleCMSSlot) {
            $this->addsfSimpleCMSSlot($sfSimpleCMSSlot);
        }

        $this->collsfSimpleCMSSlots = $sfSimpleCMSSlots;
        $this->collsfSimpleCMSSlotsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related sfSimpleCMSSlot objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related sfSimpleCMSSlot objects.
     * @throws PropelException
     */
    public function countsfSimpleCMSSlots(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collsfSimpleCMSSlotsPartial && !$this->isNew();
        if (null === $this->collsfSimpleCMSSlots || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collsfSimpleCMSSlots) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getsfSimpleCMSSlots());
            }
            $query = sfSimpleCMSSlotQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBysfSimpleCMSPage($this)
                ->count($con);
        }

        return count($this->collsfSimpleCMSSlots);
    }

    /**
     * Method called to associate a sfSimpleCMSSlot object to this object
     * through the sfSimpleCMSSlot foreign key attribute.
     *
     * @param    sfSimpleCMSSlot $l sfSimpleCMSSlot
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function addsfSimpleCMSSlot(sfSimpleCMSSlot $l)
    {
        if ($this->collsfSimpleCMSSlots === null) {
            $this->initsfSimpleCMSSlots();
            $this->collsfSimpleCMSSlotsPartial = true;
        }

        if (!in_array($l, $this->collsfSimpleCMSSlots->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddsfSimpleCMSSlot($l);

            if ($this->sfSimpleCMSSlotsScheduledForDeletion and $this->sfSimpleCMSSlotsScheduledForDeletion->contains($l)) {
                $this->sfSimpleCMSSlotsScheduledForDeletion->remove($this->sfSimpleCMSSlotsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	sfSimpleCMSSlot $sfSimpleCMSSlot The sfSimpleCMSSlot object to add.
     */
    protected function doAddsfSimpleCMSSlot($sfSimpleCMSSlot)
    {
        $this->collsfSimpleCMSSlots[]= $sfSimpleCMSSlot;
        $sfSimpleCMSSlot->setsfSimpleCMSPage($this);
    }

    /**
     * @param	sfSimpleCMSSlot $sfSimpleCMSSlot The sfSimpleCMSSlot object to remove.
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function removesfSimpleCMSSlot($sfSimpleCMSSlot)
    {
        if ($this->getsfSimpleCMSSlots()->contains($sfSimpleCMSSlot)) {
            $this->collsfSimpleCMSSlots->remove($this->collsfSimpleCMSSlots->search($sfSimpleCMSSlot));
            if (null === $this->sfSimpleCMSSlotsScheduledForDeletion) {
                $this->sfSimpleCMSSlotsScheduledForDeletion = clone $this->collsfSimpleCMSSlots;
                $this->sfSimpleCMSSlotsScheduledForDeletion->clear();
            }
            $this->sfSimpleCMSSlotsScheduledForDeletion[]= clone $sfSimpleCMSSlot;
            $sfSimpleCMSSlot->setsfSimpleCMSPage(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->slug = null;
        $this->title = null;
        $this->title_short = null;
        $this->topic_id = null;
        $this->template = null;
        $this->meta = null;
        $this->keywords = null;
        $this->is_published = null;
        $this->is_secure = null;
        $this->tree_left = null;
        $this->tree_right = null;
        $this->tree_level = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collsfSimpleCMSSlots) {
                foreach ($this->collsfSimpleCMSSlots as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        // nested_set behavior
        $this->collNestedSetChildren = null;
        $this->aNestedSetParent = null;
        if ($this->collsfSimpleCMSSlots instanceof PropelCollection) {
            $this->collsfSimpleCMSSlots->clearIterator();
        }
        $this->collsfSimpleCMSSlots = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(sfSimpleCMSPagePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // archivable behavior

    /**
     * Get an archived version of the current object.
     *
     * @param PropelPDO $con Optional connection object
     *
     * @return     SfSimpleCmsPageArchive An archive object, or null if the current object was never archived
     */
    public function getArchive(PropelPDO $con = null)
    {
        if ($this->isNew()) {
            return null;
        }
        $archive = SfSimpleCmsPageArchiveQuery::create()
            ->filterByPrimaryKey($this->getPrimaryKey())
            ->findOne($con);

        return $archive;
    }
    /**
     * Copy the data of the current object into a $archiveTablePhpName archive object.
     * The archived object is then saved.
     * If the current object has already been archived, the archived object
     * is updated and not duplicated.
     *
     * @param PropelPDO $con Optional connection object
     *
     * @throws PropelException If the object is new
     *
     * @return     SfSimpleCmsPageArchive The archive object based on this object
     */
    public function archive(PropelPDO $con = null)
    {
        if ($this->isNew()) {
            throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
        }
        if (!$archive = $this->getArchive($con)) {
            $archive = new SfSimpleCmsPageArchive();
            $archive->setPrimaryKey($this->getPrimaryKey());
        }
        $this->copyInto($archive, $deepCopy = false, $makeNew = false);
        $archive->setArchivedAt(time());
        $archive->save($con);

        return $archive;
    }

    /**
     * Revert the the current object to the state it had when it was last archived.
     * The object must be saved afterwards if the changes must persist.
     *
     * @param PropelPDO $con Optional connection object
     *
     * @throws PropelException If the object has no corresponding archive.
     *
     * @return sfSimpleCMSPage The current object (for fluent API support)
     */
    public function restoreFromArchive(PropelPDO $con = null)
    {
        if (!$archive = $this->getArchive($con)) {
            throw new PropelException('The current object has never been archived and cannot be restored');
        }
        $this->populateFromArchive($archive);

        return $this;
    }

    /**
     * Populates the the current object based on a $archiveTablePhpName archive object.
     *
     * @param      SfSimpleCmsPageArchive $archive An archived object based on the same class
      * @param      Boolean $populateAutoIncrementPrimaryKeys
     *               If true, autoincrement columns are copied from the archive object.
     *               If false, autoincrement columns are left intact.
      *
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     */
    public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false) {
        if ($populateAutoIncrementPrimaryKeys) {
            $this->setId($archive->getId());
        }
        $this->setSlug($archive->getSlug());
        $this->setTitle($archive->getTitle());
        $this->setTitleShort($archive->getTitleShort());
        $this->setTopicId($archive->getTopicId());
        $this->setTemplate($archive->getTemplate());
        $this->setMeta($archive->getMeta());
        $this->setKeywords($archive->getKeywords());
        $this->setIsPublished($archive->getIsPublished());
        $this->setIsSecure($archive->getIsSecure());
        $this->setTreeLeft($archive->getTreeLeft());
        $this->setTreeRight($archive->getTreeRight());
        $this->setTreeLevel($archive->getTreeLevel());
        $this->setCreatedAt($archive->getCreatedAt());
        $this->setUpdatedAt($archive->getUpdatedAt());

        return $this;
    }

    /**
     * Removes the object from the database without archiving it.
     *
     * @param PropelPDO $con Optional connection object
     *
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     */
    public function deleteWithoutArchive(PropelPDO $con = null)
    {
        $this->archiveOnDelete = false;

        return $this->delete($con);
    }

    // nested_set behavior

    /**
     * Execute queries that were saved to be run inside the save transaction
     */
    protected function processNestedSetQueries($con)
    {
        foreach ($this->nestedSetQueries as $query) {
            $query['arguments'][]= $con;
            call_user_func_array($query['callable'], $query['arguments']);
        }
        $this->nestedSetQueries = array();
    }

    /**
     * Proxy getter method for the left value of the nested set model.
     * It provides a generic way to get the value, whatever the actual column name is.
     *
     * @return     int The nested set left value
     */
    public function getLeftValue()
    {
        return $this->tree_left;
    }

    /**
     * Proxy getter method for the right value of the nested set model.
     * It provides a generic way to get the value, whatever the actual column name is.
     *
     * @return     int The nested set right value
     */
    public function getRightValue()
    {
        return $this->tree_right;
    }

    /**
     * Proxy getter method for the level value of the nested set model.
     * It provides a generic way to get the value, whatever the actual column name is.
     *
     * @return     int The nested set level value
     */
    public function getLevel()
    {
        return $this->tree_level;
    }

    /**
     * Proxy setter method for the left value of the nested set model.
     * It provides a generic way to set the value, whatever the actual column name is.
     *
     * @param      int $v The nested set left value
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setLeftValue($v)
    {
        return $this->setTreeLeft($v);
    }

    /**
     * Proxy setter method for the right value of the nested set model.
     * It provides a generic way to set the value, whatever the actual column name is.
     *
     * @param      int $v The nested set right value
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setRightValue($v)
    {
        return $this->setTreeRight($v);
    }

    /**
     * Proxy setter method for the level value of the nested set model.
     * It provides a generic way to set the value, whatever the actual column name is.
     *
     * @param      int $v The nested set level value
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     */
    public function setLevel($v)
    {
        return $this->setTreeLevel($v);
    }

    /**
     * Creates the supplied node as the root node.
     *
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     * @throws     PropelException
     */
    public function makeRoot()
    {
        if ($this->getLeftValue() || $this->getRightValue()) {
            throw new PropelException('Cannot turn an existing node into a root node.');
        }

        $this->setLeftValue(1);
        $this->setRightValue(2);
        $this->setLevel(0);

        return $this;
    }

    /**
     * Tests if onbject is a node, i.e. if it is inserted in the tree
     *
     * @return     bool
     */
    public function isInTree()
    {
        return $this->getLeftValue() > 0 && $this->getRightValue() > $this->getLeftValue();
    }

    /**
     * Tests if node is a root
     *
     * @return     bool
     */
    public function isRoot()
    {
        return $this->isInTree() && $this->getLeftValue() == 1;
    }

    /**
     * Tests if node is a leaf
     *
     * @return     bool
     */
    public function isLeaf()
    {
        return $this->isInTree() &&  ($this->getRightValue() - $this->getLeftValue()) == 1;
    }

    /**
     * Tests if node is a descendant of another node
     *
     * @param      sfSimpleCMSPage $node Propel node object
     * @return     bool
     */
    public function isDescendantOf($parent)
    {

        return $this->isInTree() && $this->getLeftValue() > $parent->getLeftValue() && $this->getRightValue() < $parent->getRightValue();
    }

    /**
     * Tests if node is a ancestor of another node
     *
     * @param      sfSimpleCMSPage $node Propel node object
     * @return     bool
     */
    public function isAncestorOf($child)
    {
        return $child->isDescendantOf($this);
    }

    /**
     * Tests if object has an ancestor
     *
     * @param      PropelPDO $con Connection to use.
     * @return     bool
     */
    public function hasParent(PropelPDO $con = null)
    {
        return $this->getLevel() > 0;
    }

    /**
     * Sets the cache for parent node of the current object.
     * Warning: this does not move the current object in the tree.
     * Use moveTofirstChildOf() or moveToLastChildOf() for that purpose
     *
     * @param      sfSimpleCMSPage $parent
     * @return     sfSimpleCMSPage The current object, for fluid interface
     */
    public function setParent($parent = null)
    {
        $this->aNestedSetParent = $parent;

        return $this;
    }

    /**
     * Gets parent node for the current object if it exists
     * The result is cached so further calls to the same method don't issue any queries
     *
     * @param      PropelPDO $con Connection to use.
     * @return     mixed 		Propel object if exists else false
     */
    public function getParent(PropelPDO $con = null)
    {
        if ($this->aNestedSetParent === null && $this->hasParent()) {
            $this->aNestedSetParent = sfSimpleCMSPageQuery::create()
                ->ancestorsOf($this)
                ->orderByLevel(true)
                ->findOne($con);
        }

        return $this->aNestedSetParent;
    }

    /**
     * Determines if the node has previous sibling
     *
     * @param      PropelPDO $con Connection to use.
     * @return     bool
     */
    public function hasPrevSibling(PropelPDO $con = null)
    {
        if (!sfSimpleCMSPagePeer::isValid($this)) {
            return false;
        }

        return sfSimpleCMSPageQuery::create()
            ->filterByTreeRight($this->getLeftValue() - 1)
            ->count($con) > 0;
    }

    /**
     * Gets previous sibling for the given node if it exists
     *
     * @param      PropelPDO $con Connection to use.
     * @return     mixed 		Propel object if exists else false
     */
    public function getPrevSibling(PropelPDO $con = null)
    {
        return sfSimpleCMSPageQuery::create()
            ->filterByTreeRight($this->getLeftValue() - 1)
            ->findOne($con);
    }

    /**
     * Determines if the node has next sibling
     *
     * @param      PropelPDO $con Connection to use.
     * @return     bool
     */
    public function hasNextSibling(PropelPDO $con = null)
    {
        if (!sfSimpleCMSPagePeer::isValid($this)) {
            return false;
        }

        return sfSimpleCMSPageQuery::create()
            ->filterByTreeLeft($this->getRightValue() + 1)
            ->count($con) > 0;
    }

    /**
     * Gets next sibling for the given node if it exists
     *
     * @param      PropelPDO $con Connection to use.
     * @return     mixed 		Propel object if exists else false
     */
    public function getNextSibling(PropelPDO $con = null)
    {
        return sfSimpleCMSPageQuery::create()
            ->filterByTreeLeft($this->getRightValue() + 1)
            ->findOne($con);
    }

    /**
     * Clears out the $collNestedSetChildren collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return     void
     */
    public function clearNestedSetChildren()
    {
        $this->collNestedSetChildren = null;
    }

    /**
     * Initializes the $collNestedSetChildren collection.
     *
     * @return     void
     */
    public function initNestedSetChildren()
    {
        $this->collNestedSetChildren = new PropelObjectCollection();
        $this->collNestedSetChildren->setModel('sfSimpleCMSPage');
    }

    /**
     * Adds an element to the internal $collNestedSetChildren collection.
     * Beware that this doesn't insert a node in the tree.
     * This method is only used to facilitate children hydration.
     *
     * @param      sfSimpleCMSPage $sfSimpleCMSPage
     *
     * @return     void
     */
    public function addNestedSetChild($sfSimpleCMSPage)
    {
        if ($this->collNestedSetChildren === null) {
            $this->initNestedSetChildren();
        }
        if (!in_array($sfSimpleCMSPage, $this->collNestedSetChildren->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->collNestedSetChildren[]= $sfSimpleCMSPage;
            $sfSimpleCMSPage->setParent($this);
        }
    }

    /**
     * Tests if node has children
     *
     * @return     bool
     */
    public function hasChildren()
    {
        return ($this->getRightValue() - $this->getLeftValue()) > 1;
    }

    /**
     * Gets the children of the given node
     *
     * @param      Criteria  $criteria Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     array     List of sfSimpleCMSPage objects
     */
    public function getChildren($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collNestedSetChildren || null !== $criteria) {
            if ($this->isLeaf() || ($this->isNew() && null === $this->collNestedSetChildren)) {
                // return empty collection
                $this->initNestedSetChildren();
            } else {
                $collNestedSetChildren = sfSimpleCMSPageQuery::create(null, $criteria)
                  ->childrenOf($this)
                  ->orderByBranch()
                    ->find($con);
                if (null !== $criteria) {
                    return $collNestedSetChildren;
                }
                $this->collNestedSetChildren = $collNestedSetChildren;
            }
        }

        return $this->collNestedSetChildren;
    }

    /**
     * Gets number of children for the given node
     *
     * @param      Criteria  $criteria Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     int       Number of children
     */
    public function countChildren($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collNestedSetChildren || null !== $criteria) {
            if ($this->isLeaf() || ($this->isNew() && null === $this->collNestedSetChildren)) {
                return 0;
            } else {
                return sfSimpleCMSPageQuery::create(null, $criteria)
                    ->childrenOf($this)
                    ->count($con);
            }
        } else {
            return count($this->collNestedSetChildren);
        }
    }

    /**
     * Gets the first child of the given node
     *
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     array 		List of sfSimpleCMSPage objects
     */
    public function getFirstChild($query = null, PropelPDO $con = null)
    {
        if ($this->isLeaf()) {
            return array();
        } else {
            return sfSimpleCMSPageQuery::create(null, $query)
                ->childrenOf($this)
                ->orderByBranch()
                ->findOne($con);
        }
    }

    /**
     * Gets the last child of the given node
     *
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     array 		List of sfSimpleCMSPage objects
     */
    public function getLastChild($query = null, PropelPDO $con = null)
    {
        if ($this->isLeaf()) {
            return array();
        } else {
            return sfSimpleCMSPageQuery::create(null, $query)
                ->childrenOf($this)
                ->orderByBranch(true)
                ->findOne($con);
        }
    }

    /**
     * Gets the siblings of the given node
     *
     * @param      bool			$includeNode Whether to include the current node or not
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     *
     * @return     array 		List of sfSimpleCMSPage objects
     */
    public function getSiblings($includeNode = false, $query = null, PropelPDO $con = null)
    {
        if ($this->isRoot()) {
            return array();
        } else {
             $query = sfSimpleCMSPageQuery::create(null, $query)
                    ->childrenOf($this->getParent($con))
                    ->orderByBranch();
            if (!$includeNode) {
                $query->prune($this);
            }

            return $query->find($con);
        }
    }

    /**
     * Gets descendants for the given node
     *
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     array 		List of sfSimpleCMSPage objects
     */
    public function getDescendants($query = null, PropelPDO $con = null)
    {
        if ($this->isLeaf()) {
            return array();
        } else {
            return sfSimpleCMSPageQuery::create(null, $query)
                ->descendantsOf($this)
                ->orderByBranch()
                ->find($con);
        }
    }

    /**
     * Gets number of descendants for the given node
     *
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     int 		Number of descendants
     */
    public function countDescendants($query = null, PropelPDO $con = null)
    {
        if ($this->isLeaf()) {
            // save one query
            return 0;
        } else {
            return sfSimpleCMSPageQuery::create(null, $query)
                ->descendantsOf($this)
                ->count($con);
        }
    }

    /**
     * Gets descendants for the given node, plus the current node
     *
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     array 		List of sfSimpleCMSPage objects
     */
    public function getBranch($query = null, PropelPDO $con = null)
    {
        return sfSimpleCMSPageQuery::create(null, $query)
            ->branchOf($this)
            ->orderByBranch()
            ->find($con);
    }

    /**
     * Gets ancestors for the given node, starting with the root node
     * Use it for breadcrumb paths for instance
     *
     * @param      Criteria $query Criteria to filter results.
     * @param      PropelPDO $con Connection to use.
     * @return     array 		List of sfSimpleCMSPage objects
     */
    public function getAncestors($query = null, PropelPDO $con = null)
    {
        if ($this->isRoot()) {
            // save one query
            return array();
        } else {
            return sfSimpleCMSPageQuery::create(null, $query)
                ->ancestorsOf($this)
                ->orderByBranch()
                ->find($con);
        }
    }

    /**
     * Inserts the given $child node as first child of current
     * The modifications in the current object and the tree
     * are not persisted until the child object is saved.
     *
     * @param      sfSimpleCMSPage $child	Propel object for child node
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function addChild(sfSimpleCMSPage $child)
    {
        if ($this->isNew()) {
            throw new PropelException('A sfSimpleCMSPage object must not be new to accept children.');
        }
        $child->insertAsFirstChildOf($this);

        return $this;
    }

    /**
     * Inserts the current node as first child of given $parent node
     * The modifications in the current object and the tree
     * are not persisted until the current object is saved.
     *
     * @param      sfSimpleCMSPage $parent	Propel object for parent node
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function insertAsFirstChildOf($parent)
    {
        if ($this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must not already be in the tree to be inserted. Use the moveToFirstChildOf() instead.');
        }
        $left = $parent->getLeftValue() + 1;
        // Update node properties
        $this->setLeftValue($left);
        $this->setRightValue($left + 1);
        $this->setLevel($parent->getLevel() + 1);
        // update the children collection of the parent
        $parent->addNestedSetChild($this);

        // Keep the tree modification query for the save() transaction
        $this->nestedSetQueries []= array(
            'callable'  => array('sfSimpleCMSPagePeer', 'makeRoomForLeaf'),
            'arguments' => array($left, $this->isNew() ? null : $this)
        );

        return $this;
    }

    /**
     * Inserts the current node as last child of given $parent node
     * The modifications in the current object and the tree
     * are not persisted until the current object is saved.
     *
     * @param      sfSimpleCMSPage $parent	Propel object for parent node
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function insertAsLastChildOf($parent)
    {
        if ($this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must not already be in the tree to be inserted. Use the moveToLastChildOf() instead.');
        }
        $left = $parent->getRightValue();
        // Update node properties
        $this->setLeftValue($left);
        $this->setRightValue($left + 1);
        $this->setLevel($parent->getLevel() + 1);
        // update the children collection of the parent
        $parent->addNestedSetChild($this);

        // Keep the tree modification query for the save() transaction
        $this->nestedSetQueries []= array(
            'callable'  => array('sfSimpleCMSPagePeer', 'makeRoomForLeaf'),
            'arguments' => array($left, $this->isNew() ? null : $this)
        );

        return $this;
    }

    /**
     * Inserts the current node as prev sibling given $sibling node
     * The modifications in the current object and the tree
     * are not persisted until the current object is saved.
     *
     * @param      sfSimpleCMSPage $sibling	Propel object for parent node
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function insertAsPrevSiblingOf($sibling)
    {
        if ($this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must not already be in the tree to be inserted. Use the moveToPrevSiblingOf() instead.');
        }
        $left = $sibling->getLeftValue();
        // Update node properties
        $this->setLeftValue($left);
        $this->setRightValue($left + 1);
        $this->setLevel($sibling->getLevel());
        // Keep the tree modification query for the save() transaction
        $this->nestedSetQueries []= array(
            'callable'  => array('sfSimpleCMSPagePeer', 'makeRoomForLeaf'),
            'arguments' => array($left, $this->isNew() ? null : $this)
        );

        return $this;
    }

    /**
     * Inserts the current node as next sibling given $sibling node
     * The modifications in the current object and the tree
     * are not persisted until the current object is saved.
     *
     * @param      sfSimpleCMSPage $sibling	Propel object for parent node
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function insertAsNextSiblingOf($sibling)
    {
        if ($this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must not already be in the tree to be inserted. Use the moveToNextSiblingOf() instead.');
        }
        $left = $sibling->getRightValue() + 1;
        // Update node properties
        $this->setLeftValue($left);
        $this->setRightValue($left + 1);
        $this->setLevel($sibling->getLevel());
        // Keep the tree modification query for the save() transaction
        $this->nestedSetQueries []= array(
            'callable'  => array('sfSimpleCMSPagePeer', 'makeRoomForLeaf'),
            'arguments' => array($left, $this->isNew() ? null : $this)
        );

        return $this;
    }

    /**
     * Moves current node and its subtree to be the first child of $parent
     * The modifications in the current object and the tree are immediate
     *
     * @param      sfSimpleCMSPage $parent	Propel object for parent node
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function moveToFirstChildOf($parent, PropelPDO $con = null)
    {
        if (!$this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must be already in the tree to be moved. Use the insertAsFirstChildOf() instead.');
        }
        if ($parent->isDescendantOf($this)) {
            throw new PropelException('Cannot move a node as child of one of its subtree nodes.');
        }

        $this->moveSubtreeTo($parent->getLeftValue() + 1, $parent->getLevel() - $this->getLevel() + 1, $con);

        return $this;
    }

    /**
     * Moves current node and its subtree to be the last child of $parent
     * The modifications in the current object and the tree are immediate
     *
     * @param      sfSimpleCMSPage $parent	Propel object for parent node
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function moveToLastChildOf($parent, PropelPDO $con = null)
    {
        if (!$this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must be already in the tree to be moved. Use the insertAsLastChildOf() instead.');
        }
        if ($parent->isDescendantOf($this)) {
            throw new PropelException('Cannot move a node as child of one of its subtree nodes.');
        }

        $this->moveSubtreeTo($parent->getRightValue(), $parent->getLevel() - $this->getLevel() + 1, $con);

        return $this;
    }

    /**
     * Moves current node and its subtree to be the previous sibling of $sibling
     * The modifications in the current object and the tree are immediate
     *
     * @param      sfSimpleCMSPage $sibling	Propel object for sibling node
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function moveToPrevSiblingOf($sibling, PropelPDO $con = null)
    {
        if (!$this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must be already in the tree to be moved. Use the insertAsPrevSiblingOf() instead.');
        }
        if ($sibling->isRoot()) {
            throw new PropelException('Cannot move to previous sibling of a root node.');
        }
        if ($sibling->isDescendantOf($this)) {
            throw new PropelException('Cannot move a node as sibling of one of its subtree nodes.');
        }

        $this->moveSubtreeTo($sibling->getLeftValue(), $sibling->getLevel() - $this->getLevel(), $con);

        return $this;
    }

    /**
     * Moves current node and its subtree to be the next sibling of $sibling
     * The modifications in the current object and the tree are immediate
     *
     * @param      sfSimpleCMSPage $sibling	Propel object for sibling node
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     sfSimpleCMSPage The current Propel object
     */
    public function moveToNextSiblingOf($sibling, PropelPDO $con = null)
    {
        if (!$this->isInTree()) {
            throw new PropelException('A sfSimpleCMSPage object must be already in the tree to be moved. Use the insertAsNextSiblingOf() instead.');
        }
        if ($sibling->isRoot()) {
            throw new PropelException('Cannot move to next sibling of a root node.');
        }
        if ($sibling->isDescendantOf($this)) {
            throw new PropelException('Cannot move a node as sibling of one of its subtree nodes.');
        }

        $this->moveSubtreeTo($sibling->getRightValue() + 1, $sibling->getLevel() - $this->getLevel(), $con);

        return $this;
    }

    /**
     * Move current node and its children to location $destLeft and updates rest of tree
     *
     * @param      int	$destLeft Destination left value
     * @param      int	$levelDelta Delta to add to the levels
     * @param      PropelPDO $con		Connection to use.
     */
    protected function moveSubtreeTo($destLeft, $levelDelta, PropelPDO $con = null)
    {
        $preventDefault = false;
        $left  = $this->getLeftValue();
        $right = $this->getRightValue();


        $treeSize = $right - $left +1;

        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {

            // make room next to the target for the subtree
            sfSimpleCMSPagePeer::shiftRLValues($treeSize, $destLeft, null, $con);



            if (!$preventDefault) {


                if ($left >= $destLeft) { // src was shifted too?
                    $left += $treeSize;
                    $right += $treeSize;
                }

                if ($levelDelta) {
                    // update the levels of the subtree
                    sfSimpleCMSPagePeer::shiftLevel($levelDelta, $left, $right, $con);
                }

                // move the subtree to the target
                sfSimpleCMSPagePeer::shiftRLValues($destLeft - $left, $left, $right, $con);
            }

            // remove the empty room at the previous location of the subtree
            sfSimpleCMSPagePeer::shiftRLValues(-$treeSize, $right + 1, null, $con);

            // update all loaded nodes
            sfSimpleCMSPagePeer::updateLoadedNodes(null, $con);

            $con->commit();
        } catch (Exception $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Deletes all descendants for the given node
     * Instance pooling is wiped out by this command,
     * so existing sfSimpleCMSPage instances are probably invalid (except for the current one)
     *
     * @param      PropelPDO $con Connection to use.
     *
     * @return     int 		number of deleted nodes
     */
    public function deleteDescendants(PropelPDO $con = null)
    {
        if ($this->isLeaf()) {
            // save one query
            return;
        }
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $left = $this->getLeftValue();
        $right = $this->getRightValue();
        $con->beginTransaction();
        try {
            // delete descendant nodes (will empty the instance pool)
            $ret = sfSimpleCMSPageQuery::create()
                ->descendantsOf($this)
                ->delete($con);

            // fill up the room that was used by descendants
            sfSimpleCMSPagePeer::shiftRLValues($left - $right + 1, $right, null, $con);

            // fix the right value for the current node, which is now a leaf
            $this->setRightValue($left + 1);

            $con->commit();
        } catch (Exception $e) {
            $con->rollback();
            throw $e;
        }

        return $ret;
    }

    /**
     * Returns a pre-order iterator for this node and its children.
     *
     * @return     RecursiveIterator
     */
    public function getIterator()
    {
        return new NestedSetRecursiveIterator($this);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     sfSimpleCMSPage The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = sfSimpleCMSPagePeer::UPDATED_AT;

        return $this;
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {

        // symfony_behaviors behavior
        if ($callable = sfMixer::getCallable('BasesfSimpleCMSPage:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
