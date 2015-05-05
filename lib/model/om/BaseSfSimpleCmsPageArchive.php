<?php


/**
 * Base class that represents a row from the 'sf_simple_cms_page_archive' table.
 *
 *
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BaseSfSimpleCmsPageArchive extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SfSimpleCmsPageArchivePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SfSimpleCmsPageArchivePeer
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
     * The value for the archived_at field.
     * @var        string
     */
    protected $archived_at;

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
     * Get the [optionally formatted] temporal [archived_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getArchivedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->archived_at === null) {
            return null;
        }

        if ($this->archived_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->archived_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->archived_at, true), $x);
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
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [slug] column.
     *
     * @param  string $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setSlug($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->slug !== $v) {
            $this->slug = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::SLUG;
        }


        return $this;
    } // setSlug()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [title_short] column.
     *
     * @param  string $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setTitleShort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title_short !== $v) {
            $this->title_short = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::TITLE_SHORT;
        }


        return $this;
    } // setTitleShort()

    /**
     * Set the value of [topic_id] column.
     *
     * @param  int $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setTopicId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->topic_id !== $v) {
            $this->topic_id = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::TOPIC_ID;
        }


        return $this;
    } // setTopicId()

    /**
     * Set the value of [template] column.
     *
     * @param  string $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setTemplate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->template !== $v) {
            $this->template = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::TEMPLATE;
        }


        return $this;
    } // setTemplate()

    /**
     * Set the value of [meta] column.
     *
     * @param  string $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setMeta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->meta !== $v) {
            $this->meta = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::META;
        }


        return $this;
    } // setMeta()

    /**
     * Set the value of [keywords] column.
     *
     * @param  string $v new value
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setKeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->keywords !== $v) {
            $this->keywords = $v;
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::KEYWORDS;
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
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
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
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::IS_PUBLISHED;
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
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
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
            $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::IS_SECURE;
        }


        return $this;
    } // setIsSecure()

    /**
     * Sets the value of [archived_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SfSimpleCmsPageArchive The current object (for fluent API support)
     */
    public function setArchivedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->archived_at !== null || $dt !== null) {
            $currentDateAsString = ($this->archived_at !== null && $tmpDt = new DateTime($this->archived_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->archived_at = $newDateAsString;
                $this->modifiedColumns[] = SfSimpleCmsPageArchivePeer::ARCHIVED_AT;
            }
        } // if either are not null


        return $this;
    } // setArchivedAt()

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
            $this->archived_at = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = SfSimpleCmsPageArchivePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SfSimpleCmsPageArchive object", $e);
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
            $con = Propel::getConnection(SfSimpleCmsPageArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SfSimpleCmsPageArchivePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(SfSimpleCmsPageArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SfSimpleCmsPageArchiveQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseSfSimpleCmsPageArchive:delete:pre') as $callable)
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
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseSfSimpleCmsPageArchive:delete:post') as $callable)
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
            $con = Propel::getConnection(SfSimpleCmsPageArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseSfSimpleCmsPageArchive:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
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
                foreach (sfMixer::getCallables('BaseSfSimpleCmsPageArchive:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                SfSimpleCmsPageArchivePeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::SLUG)) {
            $modifiedColumns[':p' . $index++]  = '`slug`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TITLE_SHORT)) {
            $modifiedColumns[':p' . $index++]  = '`title_short`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TOPIC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`topic_id`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TEMPLATE)) {
            $modifiedColumns[':p' . $index++]  = '`template`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::META)) {
            $modifiedColumns[':p' . $index++]  = '`meta`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`keywords`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::IS_PUBLISHED)) {
            $modifiedColumns[':p' . $index++]  = '`is_published`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::IS_SECURE)) {
            $modifiedColumns[':p' . $index++]  = '`is_secure`';
        }
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::ARCHIVED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`archived_at`';
        }

        $sql = sprintf(
            'INSERT INTO `sf_simple_cms_page_archive` (%s) VALUES (%s)',
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
                    case '`archived_at`':
                        $stmt->bindValue($identifier, $this->archived_at, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = SfSimpleCmsPageArchivePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = SfSimpleCmsPageArchivePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getArchivedAt();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['SfSimpleCmsPageArchive'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SfSimpleCmsPageArchive'][$this->getPrimaryKey()] = true;
        $keys = SfSimpleCmsPageArchivePeer::getFieldNames($keyType);
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
            $keys[10] => $this->getArchivedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = SfSimpleCmsPageArchivePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setArchivedAt($value);
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
        $keys = SfSimpleCmsPageArchivePeer::getFieldNames($keyType);

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
        if (array_key_exists($keys[10], $arr)) $this->setArchivedAt($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SfSimpleCmsPageArchivePeer::DATABASE_NAME);

        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::ID)) $criteria->add(SfSimpleCmsPageArchivePeer::ID, $this->id);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::SLUG)) $criteria->add(SfSimpleCmsPageArchivePeer::SLUG, $this->slug);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TITLE)) $criteria->add(SfSimpleCmsPageArchivePeer::TITLE, $this->title);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TITLE_SHORT)) $criteria->add(SfSimpleCmsPageArchivePeer::TITLE_SHORT, $this->title_short);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TOPIC_ID)) $criteria->add(SfSimpleCmsPageArchivePeer::TOPIC_ID, $this->topic_id);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::TEMPLATE)) $criteria->add(SfSimpleCmsPageArchivePeer::TEMPLATE, $this->template);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::META)) $criteria->add(SfSimpleCmsPageArchivePeer::META, $this->meta);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::KEYWORDS)) $criteria->add(SfSimpleCmsPageArchivePeer::KEYWORDS, $this->keywords);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::IS_PUBLISHED)) $criteria->add(SfSimpleCmsPageArchivePeer::IS_PUBLISHED, $this->is_published);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::IS_SECURE)) $criteria->add(SfSimpleCmsPageArchivePeer::IS_SECURE, $this->is_secure);
        if ($this->isColumnModified(SfSimpleCmsPageArchivePeer::ARCHIVED_AT)) $criteria->add(SfSimpleCmsPageArchivePeer::ARCHIVED_AT, $this->archived_at);

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
        $criteria = new Criteria(SfSimpleCmsPageArchivePeer::DATABASE_NAME);
        $criteria->add(SfSimpleCmsPageArchivePeer::ID, $this->id);

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
     * @param object $copyObj An object of SfSimpleCmsPageArchive (or compatible) type.
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
        $copyObj->setArchivedAt($this->getArchivedAt());
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
     * @return SfSimpleCmsPageArchive Clone of current object.
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
     * @return SfSimpleCmsPageArchivePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SfSimpleCmsPageArchivePeer();
        }

        return self::$peer;
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
        $this->archived_at = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SfSimpleCmsPageArchivePeer::DEFAULT_STRING_FORMAT);
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

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {

        // symfony_behaviors behavior
        if ($callable = sfMixer::getCallable('BaseSfSimpleCmsPageArchive:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
