<?php


/**
 * Base class that represents a query for the 'sf_simple_cms_slot_archive' table.
 *
 *
 *
 * @method SfSimpleCmsSlotArchiveQuery orderByPageId($order = Criteria::ASC) Order by the page_id column
 * @method SfSimpleCmsSlotArchiveQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 * @method SfSimpleCmsSlotArchiveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method SfSimpleCmsSlotArchiveQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method SfSimpleCmsSlotArchiveQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method SfSimpleCmsSlotArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method SfSimpleCmsSlotArchiveQuery groupByPageId() Group by the page_id column
 * @method SfSimpleCmsSlotArchiveQuery groupByCulture() Group by the culture column
 * @method SfSimpleCmsSlotArchiveQuery groupByName() Group by the name column
 * @method SfSimpleCmsSlotArchiveQuery groupByType() Group by the type column
 * @method SfSimpleCmsSlotArchiveQuery groupByValue() Group by the value column
 * @method SfSimpleCmsSlotArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method SfSimpleCmsSlotArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SfSimpleCmsSlotArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SfSimpleCmsSlotArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SfSimpleCmsSlotArchive findOne(PropelPDO $con = null) Return the first SfSimpleCmsSlotArchive matching the query
 * @method SfSimpleCmsSlotArchive findOneOrCreate(PropelPDO $con = null) Return the first SfSimpleCmsSlotArchive matching the query, or a new SfSimpleCmsSlotArchive object populated from the query conditions when no match is found
 *
 * @method SfSimpleCmsSlotArchive findOneByPageId(int $page_id) Return the first SfSimpleCmsSlotArchive filtered by the page_id column
 * @method SfSimpleCmsSlotArchive findOneByCulture(string $culture) Return the first SfSimpleCmsSlotArchive filtered by the culture column
 * @method SfSimpleCmsSlotArchive findOneByName(string $name) Return the first SfSimpleCmsSlotArchive filtered by the name column
 * @method SfSimpleCmsSlotArchive findOneByType(string $type) Return the first SfSimpleCmsSlotArchive filtered by the type column
 * @method SfSimpleCmsSlotArchive findOneByValue(string $value) Return the first SfSimpleCmsSlotArchive filtered by the value column
 * @method SfSimpleCmsSlotArchive findOneByArchivedAt(string $archived_at) Return the first SfSimpleCmsSlotArchive filtered by the archived_at column
 *
 * @method array findByPageId(int $page_id) Return SfSimpleCmsSlotArchive objects filtered by the page_id column
 * @method array findByCulture(string $culture) Return SfSimpleCmsSlotArchive objects filtered by the culture column
 * @method array findByName(string $name) Return SfSimpleCmsSlotArchive objects filtered by the name column
 * @method array findByType(string $type) Return SfSimpleCmsSlotArchive objects filtered by the type column
 * @method array findByValue(string $value) Return SfSimpleCmsSlotArchive objects filtered by the value column
 * @method array findByArchivedAt(string $archived_at) Return SfSimpleCmsSlotArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BaseSfSimpleCmsSlotArchiveQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSfSimpleCmsSlotArchiveQuery object.
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
            $modelName = 'SfSimpleCmsSlotArchive';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SfSimpleCmsSlotArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SfSimpleCmsSlotArchiveQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SfSimpleCmsSlotArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SfSimpleCmsSlotArchiveQuery) {
            return $criteria;
        }
        $query = new SfSimpleCmsSlotArchiveQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$page_id, $culture, $name]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SfSimpleCmsSlotArchive|SfSimpleCmsSlotArchive[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SfSimpleCmsSlotArchivePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SfSimpleCmsSlotArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SfSimpleCmsSlotArchive A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `page_id`, `culture`, `name`, `type`, `value`, `archived_at` FROM `sf_simple_cms_slot_archive` WHERE `page_id` = :p0 AND `culture` = :p1 AND `name` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SfSimpleCmsSlotArchive();
            $obj->hydrate($row);
            SfSimpleCmsSlotArchivePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return SfSimpleCmsSlotArchive|SfSimpleCmsSlotArchive[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SfSimpleCmsSlotArchive[]|mixed the list of results, formatted by the current formatter
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
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::PAGE_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::CULTURE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::NAME, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SfSimpleCmsSlotArchivePeer::PAGE_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SfSimpleCmsSlotArchivePeer::CULTURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SfSimpleCmsSlotArchivePeer::NAME, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the page_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPageId(1234); // WHERE page_id = 1234
     * $query->filterByPageId(array(12, 34)); // WHERE page_id IN (12, 34)
     * $query->filterByPageId(array('min' => 12)); // WHERE page_id >= 12
     * $query->filterByPageId(array('max' => 12)); // WHERE page_id <= 12
     * </code>
     *
     * @param     mixed $pageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByPageId($pageId = null, $comparison = null)
    {
        if (is_array($pageId)) {
            $useMinMax = false;
            if (isset($pageId['min'])) {
                $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::PAGE_ID, $pageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pageId['max'])) {
                $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::PAGE_ID, $pageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::PAGE_ID, $pageId, $comparison);
    }

    /**
     * Filter the query on the culture column
     *
     * Example usage:
     * <code>
     * $query->filterByCulture('fooValue');   // WHERE culture = 'fooValue'
     * $query->filterByCulture('%fooValue%'); // WHERE culture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $culture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByCulture($culture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($culture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $culture)) {
                $culture = str_replace('*', '%', $culture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $value The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($value)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $value)) {
                $value = str_replace('*', '%', $value);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::VALUE, $value, $comparison);
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
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfSimpleCmsSlotArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SfSimpleCmsSlotArchive $sfSimpleCmsSlotArchive Object to remove from the list of results
     *
     * @return SfSimpleCmsSlotArchiveQuery The current query, for fluid interface
     */
    public function prune($sfSimpleCmsSlotArchive = null)
    {
        if ($sfSimpleCmsSlotArchive) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SfSimpleCmsSlotArchivePeer::PAGE_ID), $sfSimpleCmsSlotArchive->getPageId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SfSimpleCmsSlotArchivePeer::CULTURE), $sfSimpleCmsSlotArchive->getCulture(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SfSimpleCmsSlotArchivePeer::NAME), $sfSimpleCmsSlotArchive->getName(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
