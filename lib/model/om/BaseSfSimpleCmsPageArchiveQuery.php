<?php


/**
 * Base class that represents a query for the 'sf_simple_cms_page_archive' table.
 *
 *
 *
 * @method SfSimpleCmsPageArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SfSimpleCmsPageArchiveQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method SfSimpleCmsPageArchiveQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method SfSimpleCmsPageArchiveQuery orderByTitleShort($order = Criteria::ASC) Order by the title_short column
 * @method SfSimpleCmsPageArchiveQuery orderByTopicId($order = Criteria::ASC) Order by the topic_id column
 * @method SfSimpleCmsPageArchiveQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method SfSimpleCmsPageArchiveQuery orderByMeta($order = Criteria::ASC) Order by the meta column
 * @method SfSimpleCmsPageArchiveQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method SfSimpleCmsPageArchiveQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method SfSimpleCmsPageArchiveQuery orderByIsSecure($order = Criteria::ASC) Order by the is_secure column
 * @method SfSimpleCmsPageArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method SfSimpleCmsPageArchiveQuery groupById() Group by the id column
 * @method SfSimpleCmsPageArchiveQuery groupBySlug() Group by the slug column
 * @method SfSimpleCmsPageArchiveQuery groupByTitle() Group by the title column
 * @method SfSimpleCmsPageArchiveQuery groupByTitleShort() Group by the title_short column
 * @method SfSimpleCmsPageArchiveQuery groupByTopicId() Group by the topic_id column
 * @method SfSimpleCmsPageArchiveQuery groupByTemplate() Group by the template column
 * @method SfSimpleCmsPageArchiveQuery groupByMeta() Group by the meta column
 * @method SfSimpleCmsPageArchiveQuery groupByKeywords() Group by the keywords column
 * @method SfSimpleCmsPageArchiveQuery groupByIsPublished() Group by the is_published column
 * @method SfSimpleCmsPageArchiveQuery groupByIsSecure() Group by the is_secure column
 * @method SfSimpleCmsPageArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method SfSimpleCmsPageArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SfSimpleCmsPageArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SfSimpleCmsPageArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SfSimpleCmsPageArchive findOne(PropelPDO $con = null) Return the first SfSimpleCmsPageArchive matching the query
 * @method SfSimpleCmsPageArchive findOneOrCreate(PropelPDO $con = null) Return the first SfSimpleCmsPageArchive matching the query, or a new SfSimpleCmsPageArchive object populated from the query conditions when no match is found
 *
 * @method SfSimpleCmsPageArchive findOneBySlug(string $slug) Return the first SfSimpleCmsPageArchive filtered by the slug column
 * @method SfSimpleCmsPageArchive findOneByTitle(string $title) Return the first SfSimpleCmsPageArchive filtered by the title column
 * @method SfSimpleCmsPageArchive findOneByTitleShort(string $title_short) Return the first SfSimpleCmsPageArchive filtered by the title_short column
 * @method SfSimpleCmsPageArchive findOneByTopicId(int $topic_id) Return the first SfSimpleCmsPageArchive filtered by the topic_id column
 * @method SfSimpleCmsPageArchive findOneByTemplate(string $template) Return the first SfSimpleCmsPageArchive filtered by the template column
 * @method SfSimpleCmsPageArchive findOneByMeta(string $meta) Return the first SfSimpleCmsPageArchive filtered by the meta column
 * @method SfSimpleCmsPageArchive findOneByKeywords(string $keywords) Return the first SfSimpleCmsPageArchive filtered by the keywords column
 * @method SfSimpleCmsPageArchive findOneByIsPublished(boolean $is_published) Return the first SfSimpleCmsPageArchive filtered by the is_published column
 * @method SfSimpleCmsPageArchive findOneByIsSecure(boolean $is_secure) Return the first SfSimpleCmsPageArchive filtered by the is_secure column
 * @method SfSimpleCmsPageArchive findOneByArchivedAt(string $archived_at) Return the first SfSimpleCmsPageArchive filtered by the archived_at column
 *
 * @method array findById(int $id) Return SfSimpleCmsPageArchive objects filtered by the id column
 * @method array findBySlug(string $slug) Return SfSimpleCmsPageArchive objects filtered by the slug column
 * @method array findByTitle(string $title) Return SfSimpleCmsPageArchive objects filtered by the title column
 * @method array findByTitleShort(string $title_short) Return SfSimpleCmsPageArchive objects filtered by the title_short column
 * @method array findByTopicId(int $topic_id) Return SfSimpleCmsPageArchive objects filtered by the topic_id column
 * @method array findByTemplate(string $template) Return SfSimpleCmsPageArchive objects filtered by the template column
 * @method array findByMeta(string $meta) Return SfSimpleCmsPageArchive objects filtered by the meta column
 * @method array findByKeywords(string $keywords) Return SfSimpleCmsPageArchive objects filtered by the keywords column
 * @method array findByIsPublished(boolean $is_published) Return SfSimpleCmsPageArchive objects filtered by the is_published column
 * @method array findByIsSecure(boolean $is_secure) Return SfSimpleCmsPageArchive objects filtered by the is_secure column
 * @method array findByArchivedAt(string $archived_at) Return SfSimpleCmsPageArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BaseSfSimpleCmsPageArchiveQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSfSimpleCmsPageArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'propel';
        }
        if (null === $modelName) {
            $modelName = 'SfSimpleCmsPageArchive';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SfSimpleCmsPageArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SfSimpleCmsPageArchiveQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SfSimpleCmsPageArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SfSimpleCmsPageArchiveQuery) {
            return $criteria;
        }
        $query = new SfSimpleCmsPageArchiveQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SfSimpleCmsPageArchive|SfSimpleCmsPageArchive[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SfSimpleCmsPageArchivePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsPageArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SfSimpleCmsPageArchive A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SfSimpleCmsPageArchive A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `slug`, `title`, `title_short`, `topic_id`, `template`, `meta`, `keywords`, `is_published`, `is_secure`, `archived_at` FROM `sf_simple_cms_page_archive` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SfSimpleCmsPageArchive();
            $obj->hydrate($row);
            SfSimpleCmsPageArchivePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return SfSimpleCmsPageArchive|SfSimpleCmsPageArchive[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SfSimpleCmsPageArchive[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the title_short column
     *
     * Example usage:
     * <code>
     * $query->filterByTitleShort('fooValue');   // WHERE title_short = 'fooValue'
     * $query->filterByTitleShort('%fooValue%'); // WHERE title_short LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titleShort The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByTitleShort($titleShort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titleShort)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titleShort)) {
                $titleShort = str_replace('*', '%', $titleShort);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::TITLE_SHORT, $titleShort, $comparison);
    }

    /**
     * Filter the query on the topic_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTopicId(1234); // WHERE topic_id = 1234
     * $query->filterByTopicId(array(12, 34)); // WHERE topic_id IN (12, 34)
     * $query->filterByTopicId(array('min' => 12)); // WHERE topic_id >= 12
     * $query->filterByTopicId(array('max' => 12)); // WHERE topic_id <= 12
     * </code>
     *
     * @param     mixed $topicId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByTopicId($topicId = null, $comparison = null)
    {
        if (is_array($topicId)) {
            $useMinMax = false;
            if (isset($topicId['min'])) {
                $this->addUsingAlias(SfSimpleCmsPageArchivePeer::TOPIC_ID, $topicId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($topicId['max'])) {
                $this->addUsingAlias(SfSimpleCmsPageArchivePeer::TOPIC_ID, $topicId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::TOPIC_ID, $topicId, $comparison);
    }

    /**
     * Filter the query on the template column
     *
     * Example usage:
     * <code>
     * $query->filterByTemplate('fooValue');   // WHERE template = 'fooValue'
     * $query->filterByTemplate('%fooValue%'); // WHERE template LIKE '%fooValue%'
     * </code>
     *
     * @param     string $template The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByTemplate($template = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($template)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $template)) {
                $template = str_replace('*', '%', $template);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::TEMPLATE, $template, $comparison);
    }

    /**
     * Filter the query on the meta column
     *
     * Example usage:
     * <code>
     * $query->filterByMeta('fooValue');   // WHERE meta = 'fooValue'
     * $query->filterByMeta('%fooValue%'); // WHERE meta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByMeta($meta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meta)) {
                $meta = str_replace('*', '%', $meta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::META, $meta, $comparison);
    }

    /**
     * Filter the query on the keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByKeywords('fooValue');   // WHERE keywords = 'fooValue'
     * $query->filterByKeywords('%fooValue%'); // WHERE keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByKeywords($keywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keywords)) {
                $keywords = str_replace('*', '%', $keywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::KEYWORDS, $keywords, $comparison);
    }

    /**
     * Filter the query on the is_published column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublished(true); // WHERE is_published = true
     * $query->filterByIsPublished('yes'); // WHERE is_published = true
     * </code>
     *
     * @param     boolean|string $isPublished The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByIsPublished($isPublished = null, $comparison = null)
    {
        if (is_string($isPublished)) {
            $isPublished = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::IS_PUBLISHED, $isPublished, $comparison);
    }

    /**
     * Filter the query on the is_secure column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSecure(true); // WHERE is_secure = true
     * $query->filterByIsSecure('yes'); // WHERE is_secure = true
     * </code>
     *
     * @param     boolean|string $isSecure The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByIsSecure($isSecure = null, $comparison = null)
    {
        if (is_string($isSecure)) {
            $isSecure = in_array(strtolower($isSecure), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::IS_SECURE, $isSecure, $comparison);
    }

    /**
     * Filter the query on the archived_at column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivedAt('2011-03-14'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt('now'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt(array('max' => 'yesterday')); // WHERE archived_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $archivedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SfSimpleCmsPageArchive $sfSimpleCmsPageArchive Object to remove from the list of results
     *
     * @return SfSimpleCmsPageArchiveQuery The current query, for fluid interface
     */
    public function prune($sfSimpleCmsPageArchive = null)
    {
        if ($sfSimpleCmsPageArchive) {
            $this->addUsingAlias(SfSimpleCmsPageArchivePeer::ID, $sfSimpleCmsPageArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
