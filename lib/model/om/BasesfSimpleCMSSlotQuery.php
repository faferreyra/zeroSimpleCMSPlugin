<?php


/**
 * Base class that represents a query for the 'sf_simple_cms_slot' table.
 *
 *
 *
 * @method sfSimpleCMSSlotQuery orderByPageId($order = Criteria::ASC) Order by the page_id column
 * @method sfSimpleCMSSlotQuery orderByCulture($order = Criteria::ASC) Order by the culture column
 * @method sfSimpleCMSSlotQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method sfSimpleCMSSlotQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method sfSimpleCMSSlotQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method sfSimpleCMSSlotQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method sfSimpleCMSSlotQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method sfSimpleCMSSlotQuery groupByPageId() Group by the page_id column
 * @method sfSimpleCMSSlotQuery groupByCulture() Group by the culture column
 * @method sfSimpleCMSSlotQuery groupByName() Group by the name column
 * @method sfSimpleCMSSlotQuery groupByType() Group by the type column
 * @method sfSimpleCMSSlotQuery groupByValue() Group by the value column
 * @method sfSimpleCMSSlotQuery groupByCreatedAt() Group by the created_at column
 * @method sfSimpleCMSSlotQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method sfSimpleCMSSlotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method sfSimpleCMSSlotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method sfSimpleCMSSlotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method sfSimpleCMSSlotQuery leftJoinsfSimpleCMSPage($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfSimpleCMSPage relation
 * @method sfSimpleCMSSlotQuery rightJoinsfSimpleCMSPage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfSimpleCMSPage relation
 * @method sfSimpleCMSSlotQuery innerJoinsfSimpleCMSPage($relationAlias = null) Adds a INNER JOIN clause to the query using the sfSimpleCMSPage relation
 *
 * @method sfSimpleCMSSlot findOne(PropelPDO $con = null) Return the first sfSimpleCMSSlot matching the query
 * @method sfSimpleCMSSlot findOneOrCreate(PropelPDO $con = null) Return the first sfSimpleCMSSlot matching the query, or a new sfSimpleCMSSlot object populated from the query conditions when no match is found
 *
 * @method sfSimpleCMSSlot findOneByPageId(int $page_id) Return the first sfSimpleCMSSlot filtered by the page_id column
 * @method sfSimpleCMSSlot findOneByCulture(string $culture) Return the first sfSimpleCMSSlot filtered by the culture column
 * @method sfSimpleCMSSlot findOneByName(string $name) Return the first sfSimpleCMSSlot filtered by the name column
 * @method sfSimpleCMSSlot findOneByType(string $type) Return the first sfSimpleCMSSlot filtered by the type column
 * @method sfSimpleCMSSlot findOneByValue(string $value) Return the first sfSimpleCMSSlot filtered by the value column
 * @method sfSimpleCMSSlot findOneByCreatedAt(string $created_at) Return the first sfSimpleCMSSlot filtered by the created_at column
 * @method sfSimpleCMSSlot findOneByUpdatedAt(string $updated_at) Return the first sfSimpleCMSSlot filtered by the updated_at column
 *
 * @method array findByPageId(int $page_id) Return sfSimpleCMSSlot objects filtered by the page_id column
 * @method array findByCulture(string $culture) Return sfSimpleCMSSlot objects filtered by the culture column
 * @method array findByName(string $name) Return sfSimpleCMSSlot objects filtered by the name column
 * @method array findByType(string $type) Return sfSimpleCMSSlot objects filtered by the type column
 * @method array findByValue(string $value) Return sfSimpleCMSSlot objects filtered by the value column
 * @method array findByCreatedAt(string $created_at) Return sfSimpleCMSSlot objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return sfSimpleCMSSlot objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.zeroSimpleCmsPlugin.lib.model.om
 */
abstract class BasesfSimpleCMSSlotQuery extends ModelCriteria
{
    // archivable behavior
    protected $archiveOnDelete = true;

    /**
     * Initializes internal state of BasesfSimpleCMSSlotQuery object.
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
            $modelName = 'sfSimpleCMSSlot';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new sfSimpleCMSSlotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   sfSimpleCMSSlotQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return sfSimpleCMSSlotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof sfSimpleCMSSlotQuery) {
            return $criteria;
        }
        $query = new sfSimpleCMSSlotQuery(null, null, $modelAlias);

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
     * @return   sfSimpleCMSSlot|sfSimpleCMSSlot[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = sfSimpleCMSSlotPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(sfSimpleCMSSlotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 sfSimpleCMSSlot A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `page_id`, `culture`, `name`, `type`, `value`, `created_at`, `updated_at` FROM `sf_simple_cms_slot` WHERE `page_id` = :p0 AND `culture` = :p1 AND `name` = :p2';
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
            $obj = new sfSimpleCMSSlot();
            $obj->hydrate($row);
            sfSimpleCMSSlotPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return sfSimpleCMSSlot|sfSimpleCMSSlot[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|sfSimpleCMSSlot[]|mixed the list of results, formatted by the current formatter
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(sfSimpleCMSSlotPeer::PAGE_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(sfSimpleCMSSlotPeer::CULTURE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(sfSimpleCMSSlotPeer::NAME, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(sfSimpleCMSSlotPeer::PAGE_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(sfSimpleCMSSlotPeer::CULTURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(sfSimpleCMSSlotPeer::NAME, $key[2], Criteria::EQUAL);
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
     * @see       filterBysfSimpleCMSPage()
     *
     * @param     mixed $pageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function filterByPageId($pageId = null, $comparison = null)
    {
        if (is_array($pageId)) {
            $useMinMax = false;
            if (isset($pageId['min'])) {
                $this->addUsingAlias(sfSimpleCMSSlotPeer::PAGE_ID, $pageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pageId['max'])) {
                $this->addUsingAlias(sfSimpleCMSSlotPeer::PAGE_ID, $pageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::PAGE_ID, $pageId, $comparison);
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::CULTURE, $culture, $comparison);
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::NAME, $name, $comparison);
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::TYPE, $type, $comparison);
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::VALUE, $value, $comparison);
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(sfSimpleCMSSlotPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(sfSimpleCMSSlotPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(sfSimpleCMSSlotPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(sfSimpleCMSSlotPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfSimpleCMSSlotPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related sfSimpleCMSPage object
     *
     * @param   sfSimpleCMSPage|PropelObjectCollection $sfSimpleCMSPage The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 sfSimpleCMSSlotQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBysfSimpleCMSPage($sfSimpleCMSPage, $comparison = null)
    {
        if ($sfSimpleCMSPage instanceof sfSimpleCMSPage) {
            return $this
                ->addUsingAlias(sfSimpleCMSSlotPeer::PAGE_ID, $sfSimpleCMSPage->getId(), $comparison);
        } elseif ($sfSimpleCMSPage instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(sfSimpleCMSSlotPeer::PAGE_ID, $sfSimpleCMSPage->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBysfSimpleCMSPage() only accepts arguments of type sfSimpleCMSPage or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the sfSimpleCMSPage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function joinsfSimpleCMSPage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('sfSimpleCMSPage');

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
            $this->addJoinObject($join, 'sfSimpleCMSPage');
        }

        return $this;
    }

    /**
     * Use the sfSimpleCMSPage relation sfSimpleCMSPage object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   sfSimpleCMSPageQuery A secondary query class using the current class as primary query
     */
    public function usesfSimpleCMSPageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinsfSimpleCMSPage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'sfSimpleCMSPage', 'sfSimpleCMSPageQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   sfSimpleCMSSlot $sfSimpleCMSSlot Object to remove from the list of results
     *
     * @return sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function prune($sfSimpleCMSSlot = null)
    {
        if ($sfSimpleCMSSlot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(sfSimpleCMSSlotPeer::PAGE_ID), $sfSimpleCMSSlot->getPageId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(sfSimpleCMSSlotPeer::CULTURE), $sfSimpleCMSSlot->getCulture(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(sfSimpleCMSSlotPeer::NAME), $sfSimpleCMSSlot->getName(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
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
     * Copy the data of the objects satisfying the query into SfSimpleCmsSlotArchive archive objects.
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
            $con = Propel::getConnection(sfSimpleCMSSlotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(sfSimpleCMSSlotPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(sfSimpleCMSSlotPeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(sfSimpleCMSSlotPeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(sfSimpleCMSSlotPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(sfSimpleCMSSlotPeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     sfSimpleCMSSlotQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(sfSimpleCMSSlotPeer::CREATED_AT);
    }
}
