<?php


/**
 * Base class that represents a query for the 'sf_simple_cms_page' table.
 *
 *
 *
 * @method sfSimpleCMSPageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method sfSimpleCMSPageQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method sfSimpleCMSPageQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method sfSimpleCMSPageQuery orderByTitleShort($order = Criteria::ASC) Order by the title_short column
 * @method sfSimpleCMSPageQuery orderByTopicId($order = Criteria::ASC) Order by the topic_id column
 * @method sfSimpleCMSPageQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method sfSimpleCMSPageQuery orderByMeta($order = Criteria::ASC) Order by the meta column
 * @method sfSimpleCMSPageQuery orderByKeywords($order = Criteria::ASC) Order by the keywords column
 * @method sfSimpleCMSPageQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method sfSimpleCMSPageQuery orderByIsSecure($order = Criteria::ASC) Order by the is_secure column
 * @method sfSimpleCMSPageQuery orderByTreeLeft($order = Criteria::ASC) Order by the tree_left column
 * @method sfSimpleCMSPageQuery orderByTreeRight($order = Criteria::ASC) Order by the tree_right column
 * @method sfSimpleCMSPageQuery orderByTreeLevel($order = Criteria::ASC) Order by the tree_level column
 * @method sfSimpleCMSPageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method sfSimpleCMSPageQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method sfSimpleCMSPageQuery groupById() Group by the id column
 * @method sfSimpleCMSPageQuery groupBySlug() Group by the slug column
 * @method sfSimpleCMSPageQuery groupByTitle() Group by the title column
 * @method sfSimpleCMSPageQuery groupByTitleShort() Group by the title_short column
 * @method sfSimpleCMSPageQuery groupByTopicId() Group by the topic_id column
 * @method sfSimpleCMSPageQuery groupByTemplate() Group by the template column
 * @method sfSimpleCMSPageQuery groupByMeta() Group by the meta column
 * @method sfSimpleCMSPageQuery groupByKeywords() Group by the keywords column
 * @method sfSimpleCMSPageQuery groupByIsPublished() Group by the is_published column
 * @method sfSimpleCMSPageQuery groupByIsSecure() Group by the is_secure column
 * @method sfSimpleCMSPageQuery groupByTreeLeft() Group by the tree_left column
 * @method sfSimpleCMSPageQuery groupByTreeRight() Group by the tree_right column
 * @method sfSimpleCMSPageQuery groupByTreeLevel() Group by the tree_level column
 * @method sfSimpleCMSPageQuery groupByCreatedAt() Group by the created_at column
 * @method sfSimpleCMSPageQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method sfSimpleCMSPageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method sfSimpleCMSPageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method sfSimpleCMSPageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method sfSimpleCMSPageQuery leftJoinsfSimpleCMSSlot($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfSimpleCMSSlot relation
 * @method sfSimpleCMSPageQuery rightJoinsfSimpleCMSSlot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfSimpleCMSSlot relation
 * @method sfSimpleCMSPageQuery innerJoinsfSimpleCMSSlot($relationAlias = null) Adds a INNER JOIN clause to the query using the sfSimpleCMSSlot relation
 *
 * @method sfSimpleCMSPage findOne(PropelPDO $con = null) Return the first sfSimpleCMSPage matching the query
 * @method sfSimpleCMSPage findOneOrCreate(PropelPDO $con = null) Return the first sfSimpleCMSPage matching the query, or a new sfSimpleCMSPage object populated from the query conditions when no match is found
 *
 * @method sfSimpleCMSPage findOneBySlug(string $slug) Return the first sfSimpleCMSPage filtered by the slug column
 * @method sfSimpleCMSPage findOneByTitle(string $title) Return the first sfSimpleCMSPage filtered by the title column
 * @method sfSimpleCMSPage findOneByTitleShort(string $title_short) Return the first sfSimpleCMSPage filtered by the title_short column
 * @method sfSimpleCMSPage findOneByTopicId(int $topic_id) Return the first sfSimpleCMSPage filtered by the topic_id column
 * @method sfSimpleCMSPage findOneByTemplate(string $template) Return the first sfSimpleCMSPage filtered by the template column
 * @method sfSimpleCMSPage findOneByMeta(string $meta) Return the first sfSimpleCMSPage filtered by the meta column
 * @method sfSimpleCMSPage findOneByKeywords(string $keywords) Return the first sfSimpleCMSPage filtered by the keywords column
 * @method sfSimpleCMSPage findOneByIsPublished(boolean $is_published) Return the first sfSimpleCMSPage filtered by the is_published column
 * @method sfSimpleCMSPage findOneByIsSecure(boolean $is_secure) Return the first sfSimpleCMSPage filtered by the is_secure column
 * @method sfSimpleCMSPage findOneByTreeLeft(int $tree_left) Return the first sfSimpleCMSPage filtered by the tree_left column
 * @method sfSimpleCMSPage findOneByTreeRight(int $tree_right) Return the first sfSimpleCMSPage filtered by the tree_right column
 * @method sfSimpleCMSPage findOneByTreeLevel(int $tree_level) Return the first sfSimpleCMSPage filtered by the tree_level column
 * @method sfSimpleCMSPage findOneByCreatedAt(string $created_at) Return the first sfSimpleCMSPage filtered by the created_at column
 * @method sfSimpleCMSPage findOneByUpdatedAt(string $updated_at) Return the first sfSimpleCMSPage filtered by the updated_at column
 *
 * @method array findById(int $id) Return sfSimpleCMSPage objects filtered by the id column
 * @method array findBySlug(string $slug) Return sfSimpleCMSPage objects filtered by the slug column
 * @method array findByTitle(string $title) Return sfSimpleCMSPage objects filtered by the title column
 * @method array findByTitleShort(string $title_short) Return sfSimpleCMSPage objects filtered by the title_short column
 * @method array findByTopicId(int $topic_id) Return sfSimpleCMSPage objects filtered by the topic_id column
 * @method array findByTemplate(string $template) Return sfSimpleCMSPage objects filtered by the template column
 * @method array findByMeta(string $meta) Return sfSimpleCMSPage objects filtered by the meta column
 * @method array findByKeywords(string $keywords) Return sfSimpleCMSPage objects filtered by the keywords column
 * @method array findByIsPublished(boolean $is_published) Return sfSimpleCMSPage objects filtered by the is_published column
 * @method array findByIsSecure(boolean $is_secure) Return sfSimpleCMSPage objects filtered by the is_secure column
 * @method array findByTreeLeft(int $tree_left) Return sfSimpleCMSPage objects filtered by the tree_left column
 * @method array findByTreeRight(int $tree_right) Return sfSimpleCMSPage objects filtered by the tree_right column
 * @method array findByTreeLevel(int $tree_level) Return sfSimpleCMSPage objects filtered by the tree_level column
 * @method array findByCreatedAt(string $created_at) Return sfSimpleCMSPage objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return sfSimpleCMSPage objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BasesfSimpleCMSPageQuery extends ModelCriteria
{
    // archivable behavior
    protected $archiveOnDelete = true;

    /**
     * Initializes internal state of BasesfSimpleCMSPageQuery object.
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
            $modelName = 'sfSimpleCMSPage';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new sfSimpleCMSPageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   sfSimpleCMSPageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return sfSimpleCMSPageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof sfSimpleCMSPageQuery) {
            return $criteria;
        }
        $query = new sfSimpleCMSPageQuery(null, null, $modelAlias);

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
     * @return   sfSimpleCMSPage|sfSimpleCMSPage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = sfSimpleCMSPagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 sfSimpleCMSPage A model object, or null if the key is not found
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
     * @return                 sfSimpleCMSPage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `slug`, `title`, `title_short`, `topic_id`, `template`, `meta`, `keywords`, `is_published`, `is_secure`, `tree_left`, `tree_right`, `tree_level`, `created_at`, `updated_at` FROM `sf_simple_cms_page` WHERE `id` = :p0';
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
            $obj = new sfSimpleCMSPage();
            $obj->hydrate($row);
            sfSimpleCMSPagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return sfSimpleCMSPage|sfSimpleCMSPage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|sfSimpleCMSPage[]|mixed the list of results, formatted by the current formatter
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(sfSimpleCMSPagePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(sfSimpleCMSPagePeer::ID, $keys, Criteria::IN);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::ID, $id, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSPagePeer::SLUG, $slug, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TITLE, $title, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TITLE_SHORT, $titleShort, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByTopicId($topicId = null, $comparison = null)
    {
        if (is_array($topicId)) {
            $useMinMax = false;
            if (isset($topicId['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TOPIC_ID, $topicId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($topicId['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TOPIC_ID, $topicId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TOPIC_ID, $topicId, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TEMPLATE, $template, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSPagePeer::META, $meta, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSPagePeer::KEYWORDS, $keywords, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByIsPublished($isPublished = null, $comparison = null)
    {
        if (is_string($isPublished)) {
            $isPublished = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::IS_PUBLISHED, $isPublished, $comparison);
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
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByIsSecure($isSecure = null, $comparison = null)
    {
        if (is_string($isSecure)) {
            $isSecure = in_array(strtolower($isSecure), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::IS_SECURE, $isSecure, $comparison);
    }

    /**
     * Filter the query on the tree_left column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLeft(1234); // WHERE tree_left = 1234
     * $query->filterByTreeLeft(array(12, 34)); // WHERE tree_left IN (12, 34)
     * $query->filterByTreeLeft(array('min' => 12)); // WHERE tree_left >= 12
     * $query->filterByTreeLeft(array('max' => 12)); // WHERE tree_left <= 12
     * </code>
     *
     * @param     mixed $treeLeft The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByTreeLeft($treeLeft = null, $comparison = null)
    {
        if (is_array($treeLeft)) {
            $useMinMax = false;
            if (isset($treeLeft['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_LEFT, $treeLeft['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLeft['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_LEFT, $treeLeft['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_LEFT, $treeLeft, $comparison);
    }

    /**
     * Filter the query on the tree_right column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeRight(1234); // WHERE tree_right = 1234
     * $query->filterByTreeRight(array(12, 34)); // WHERE tree_right IN (12, 34)
     * $query->filterByTreeRight(array('min' => 12)); // WHERE tree_right >= 12
     * $query->filterByTreeRight(array('max' => 12)); // WHERE tree_right <= 12
     * </code>
     *
     * @param     mixed $treeRight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByTreeRight($treeRight = null, $comparison = null)
    {
        if (is_array($treeRight)) {
            $useMinMax = false;
            if (isset($treeRight['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_RIGHT, $treeRight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeRight['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_RIGHT, $treeRight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_RIGHT, $treeRight, $comparison);
    }

    /**
     * Filter the query on the tree_level column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLevel(1234); // WHERE tree_level = 1234
     * $query->filterByTreeLevel(array(12, 34)); // WHERE tree_level IN (12, 34)
     * $query->filterByTreeLevel(array('min' => 12)); // WHERE tree_level >= 12
     * $query->filterByTreeLevel(array('max' => 12)); // WHERE tree_level <= 12
     * </code>
     *
     * @param     mixed $treeLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByTreeLevel($treeLevel = null, $comparison = null)
    {
        if (is_array($treeLevel)) {
            $useMinMax = false;
            if (isset($treeLevel['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_LEVEL, $treeLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLevel['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_LEVEL, $treeLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::TREE_LEVEL, $treeLevel, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(sfSimpleCMSPagePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSPagePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related sfSimpleCMSSlot object
     *
     * @param   sfSimpleCMSSlot|PropelObjectCollection $sfSimpleCMSSlot  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 sfSimpleCMSPageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBysfSimpleCMSSlot($sfSimpleCMSSlot, $comparison = null)
    {
        if ($sfSimpleCMSSlot instanceof sfSimpleCMSSlot) {
            return $this
                ->addUsingAlias(sfSimpleCMSPagePeer::ID, $sfSimpleCMSSlot->getPageId(), $comparison);
        } elseif ($sfSimpleCMSSlot instanceof PropelObjectCollection) {
            return $this
                ->usesfSimpleCMSSlotQuery()
                ->filterByPrimaryKeys($sfSimpleCMSSlot->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBysfSimpleCMSSlot() only accepts arguments of type sfSimpleCMSSlot or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the sfSimpleCMSSlot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function joinsfSimpleCMSSlot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('sfSimpleCMSSlot');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'sfSimpleCMSSlot');
        }

        return $this;
    }

    /**
     * Use the sfSimpleCMSSlot relation sfSimpleCMSSlot object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   sfSimpleCMSSlotQuery A secondary query class using the current class as primary query
     */
    public function usesfSimpleCMSSlotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinsfSimpleCMSSlot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'sfSimpleCMSSlot', 'sfSimpleCMSSlotQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   sfSimpleCMSPage $sfSimpleCMSPage Object to remove from the list of results
     *
     * @return sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function prune($sfSimpleCMSPage = null)
    {
        if ($sfSimpleCMSPage) {
            $this->addUsingAlias(sfSimpleCMSPagePeer::ID, $sfSimpleCMSPage->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Code to execute before every DELETE statement
     *
     * @param     PropelPDO $con The connection object used by the query
     */
    protected function basePreDelete(PropelPDO $con)
    {
        // archivable behavior

        if ($this->archiveOnDelete) {
            $this->archive($con);
        } else {
            $this->archiveOnDelete = true;
        }


        return $this->preDelete($con);
    }

    // archivable behavior

    /**
     * Copy the data of the objects satisfying the query into SfSimpleCmsPageArchive archive objects.
     * The archived objects are then saved.
     * If any of the objects has already been archived, the archived object
     * is updated and not duplicated.
     * Warning: This termination methods issues 2n+1 queries.
     *
     * @param      PropelPDO $con	Connection to use.
     * @param      Boolean $useLittleMemory	Whether or not to use PropelOnDemandFormatter to retrieve objects.
     *               Set to false if the identity map matters.
     *               Set to true (default) to use less memory.
     *
     * @return     int the number of archived objects
     * @throws     PropelException
     */
    public function archive($con = null, $useLittleMemory = true)
    {
        $totalArchivedObjects = 0;
        $criteria = clone $this;
        // prepare the query
        $criteria->setWith(array());
        if ($useLittleMemory) {
            $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
        }
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSPagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $con->beginTransaction();
        try {
            // archive all results one by one
            foreach ($criteria->find($con) as $object) {
                $object->archive($con);
                $totalArchivedObjects++;
            }
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $totalArchivedObjects;
    }

    /**
     * Enable/disable auto-archiving on delete for the next query.
     *
     * @param boolean $archiveOnDelete True if the query must archive deleted objects, false otherwise.
     */
    public function setArchiveOnDelete($archiveOnDelete)
    {
        $this->archiveOnDelete = $archiveOnDelete;
    }

    /**
     * Delete records matching the current query without archiving them.
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return integer the number of deleted rows
     */
    public function deleteWithoutArchive($con = null)
    {
        $this->archiveOnDelete = false;

        return $this->delete($con);
    }

    /**
     * Delete all records without archiving them.
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return integer the number of deleted rows
     */
    public function deleteAllWithoutArchive($con = null)
    {
        $this->archiveOnDelete = false;

        return $this->deleteAll($con);
    }

    // nested_set behavior

    /**
     * Filter the query to restrict the result to descendants of an object
     *
     * @param     sfSimpleCMSPage $sfSimpleCMSPage The object to use for descendant search
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function descendantsOf($sfSimpleCMSPage)
    {
        return $this
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, $sfSimpleCMSPage->getLeftValue(), Criteria::GREATER_THAN)
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, $sfSimpleCMSPage->getRightValue(), Criteria::LESS_THAN);
    }

    /**
     * Filter the query to restrict the result to the branch of an object.
     * Same as descendantsOf(), except that it includes the object passed as parameter in the result
     *
     * @param     sfSimpleCMSPage $sfSimpleCMSPage The object to use for branch search
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function branchOf($sfSimpleCMSPage)
    {
        return $this
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, $sfSimpleCMSPage->getLeftValue(), Criteria::GREATER_EQUAL)
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, $sfSimpleCMSPage->getRightValue(), Criteria::LESS_EQUAL);
    }

    /**
     * Filter the query to restrict the result to children of an object
     *
     * @param     sfSimpleCMSPage $sfSimpleCMSPage The object to use for child search
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function childrenOf($sfSimpleCMSPage)
    {
        return $this
            ->descendantsOf($sfSimpleCMSPage)
            ->addUsingAlias(sfSimpleCMSPagePeer::LEVEL_COL, $sfSimpleCMSPage->getLevel() + 1, Criteria::EQUAL);
    }

    /**
     * Filter the query to restrict the result to siblings of an object.
     * The result does not include the object passed as parameter.
     *
     * @param     sfSimpleCMSPage $sfSimpleCMSPage The object to use for sibling search
     * @param      PropelPDO $con Connection to use.
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function siblingsOf($sfSimpleCMSPage, PropelPDO $con = null)
    {
        if ($sfSimpleCMSPage->isRoot()) {
            return $this->
                add(sfSimpleCMSPagePeer::LEVEL_COL, '1<>1', Criteria::CUSTOM);
        } else {
            return $this
                ->childrenOf($sfSimpleCMSPage->getParent($con))
                ->prune($sfSimpleCMSPage);
        }
    }

    /**
     * Filter the query to restrict the result to ancestors of an object
     *
     * @param     sfSimpleCMSPage $sfSimpleCMSPage The object to use for ancestors search
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function ancestorsOf($sfSimpleCMSPage)
    {
        return $this
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, $sfSimpleCMSPage->getLeftValue(), Criteria::LESS_THAN)
            ->addUsingAlias(sfSimpleCMSPagePeer::RIGHT_COL, $sfSimpleCMSPage->getRightValue(), Criteria::GREATER_THAN);
    }

    /**
     * Filter the query to restrict the result to roots of an object.
     * Same as ancestorsOf(), except that it includes the object passed as parameter in the result
     *
     * @param     sfSimpleCMSPage $sfSimpleCMSPage The object to use for roots search
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function rootsOf($sfSimpleCMSPage)
    {
        return $this
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, $sfSimpleCMSPage->getLeftValue(), Criteria::LESS_EQUAL)
            ->addUsingAlias(sfSimpleCMSPagePeer::RIGHT_COL, $sfSimpleCMSPage->getRightValue(), Criteria::GREATER_EQUAL);
    }

    /**
     * Order the result by branch, i.e. natural tree order
     *
     * @param     bool $reverse if true, reverses the order
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function orderByBranch($reverse = false)
    {
        if ($reverse) {
            return $this
                ->addDescendingOrderByColumn(sfSimpleCMSPagePeer::LEFT_COL);
        } else {
            return $this
                ->addAscendingOrderByColumn(sfSimpleCMSPagePeer::LEFT_COL);
        }
    }

    /**
     * Order the result by level, the closer to the root first
     *
     * @param     bool $reverse if true, reverses the order
     *
     * @return    sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function orderByLevel($reverse = false)
    {
        if ($reverse) {
            return $this
                ->addAscendingOrderByColumn(sfSimpleCMSPagePeer::RIGHT_COL);
        } else {
            return $this
                ->addDescendingOrderByColumn(sfSimpleCMSPagePeer::RIGHT_COL);
        }
    }

    /**
     * Returns the root node for the tree
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     sfSimpleCMSPage The tree root object
     */
    public function findRoot($con = null)
    {
        return $this
            ->addUsingAlias(sfSimpleCMSPagePeer::LEFT_COL, 1, Criteria::EQUAL)
            ->findOne($con);
    }

    /**
     * Returns the tree of objects
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     mixed the list of results, formatted by the current formatter
     */
    public function findTree($con = null)
    {
        return $this
            ->orderByBranch()
            ->find($con);
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(sfSimpleCMSPagePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(sfSimpleCMSPagePeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(sfSimpleCMSPagePeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(sfSimpleCMSPagePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(sfSimpleCMSPagePeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     sfSimpleCMSPageQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(sfSimpleCMSPagePeer::CREATED_AT);
    }
}
