<?php

namespace IDG\UserControlBundle\Models\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use IDG\UserControlBundle\Models\Lists;
use IDG\UserControlBundle\Models\User;
use IDG\UserControlBundle\Models\UserList;
use IDG\UserControlBundle\Models\UserListPeer;
use IDG\UserControlBundle\Models\UserListQuery;

/**
 * @method UserListQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method UserListQuery orderByUserId($order = Criteria::ASC) Order by the User_ID column
 * @method UserListQuery orderByListId($order = Criteria::ASC) Order by the List_ID column
 * @method UserListQuery orderByDateAdded($order = Criteria::ASC) Order by the Date_Added column
 *
 * @method UserListQuery groupById() Group by the ID column
 * @method UserListQuery groupByUserId() Group by the User_ID column
 * @method UserListQuery groupByListId() Group by the List_ID column
 * @method UserListQuery groupByDateAdded() Group by the Date_Added column
 *
 * @method UserListQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserListQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserListQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserListQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method UserListQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method UserListQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method UserListQuery leftJoinLists($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lists relation
 * @method UserListQuery rightJoinLists($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lists relation
 * @method UserListQuery innerJoinLists($relationAlias = null) Adds a INNER JOIN clause to the query using the Lists relation
 *
 * @method UserList findOne(PropelPDO $con = null) Return the first UserList matching the query
 * @method UserList findOneOrCreate(PropelPDO $con = null) Return the first UserList matching the query, or a new UserList object populated from the query conditions when no match is found
 *
 * @method UserList findOneByUserId(int $User_ID) Return the first UserList filtered by the User_ID column
 * @method UserList findOneByListId(int $List_ID) Return the first UserList filtered by the List_ID column
 * @method UserList findOneByDateAdded(string $Date_Added) Return the first UserList filtered by the Date_Added column
 *
 * @method array findById(int $ID) Return UserList objects filtered by the ID column
 * @method array findByUserId(int $User_ID) Return UserList objects filtered by the User_ID column
 * @method array findByListId(int $List_ID) Return UserList objects filtered by the List_ID column
 * @method array findByDateAdded(string $Date_Added) Return UserList objects filtered by the Date_Added column
 */
abstract class BaseUserListQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserListQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'IDG\\UserControlBundle\\Models\\UserList';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserListQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UserListQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserListQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserListQuery) {
            return $criteria;
        }
        $query = new UserListQuery(null, null, $modelAlias);

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
     * @return   UserList|UserList[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserListPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserListPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 UserList A model object, or null if the key is not found
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
     * @return                 UserList A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `User_ID`, `List_ID`, `Date_Added` FROM `User_List` WHERE `ID` = :p0';
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
            $obj = new UserList();
            $obj->hydrate($row);
            UserListPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UserList|UserList[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UserList[]|mixed the list of results, formatted by the current formatter
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
     * @return UserListQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserListPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserListPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UserListPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UserListPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserListPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the User_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE User_ID = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE User_ID IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE User_ID >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE User_ID <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(UserListPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(UserListPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserListPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the List_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByListId(1234); // WHERE List_ID = 1234
     * $query->filterByListId(array(12, 34)); // WHERE List_ID IN (12, 34)
     * $query->filterByListId(array('min' => 12)); // WHERE List_ID >= 12
     * $query->filterByListId(array('max' => 12)); // WHERE List_ID <= 12
     * </code>
     *
     * @see       filterByLists()
     *
     * @param     mixed $listId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function filterByListId($listId = null, $comparison = null)
    {
        if (is_array($listId)) {
            $useMinMax = false;
            if (isset($listId['min'])) {
                $this->addUsingAlias(UserListPeer::LIST_ID, $listId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($listId['max'])) {
                $this->addUsingAlias(UserListPeer::LIST_ID, $listId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserListPeer::LIST_ID, $listId, $comparison);
    }

    /**
     * Filter the query on the Date_Added column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAdded('2011-03-14'); // WHERE Date_Added = '2011-03-14'
     * $query->filterByDateAdded('now'); // WHERE Date_Added = '2011-03-14'
     * $query->filterByDateAdded(array('max' => 'yesterday')); // WHERE Date_Added < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAdded The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function filterByDateAdded($dateAdded = null, $comparison = null)
    {
        if (is_array($dateAdded)) {
            $useMinMax = false;
            if (isset($dateAdded['min'])) {
                $this->addUsingAlias(UserListPeer::DATE_ADDED, $dateAdded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAdded['max'])) {
                $this->addUsingAlias(UserListPeer::DATE_ADDED, $dateAdded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserListPeer::DATE_ADDED, $dateAdded, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserListQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(UserListPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserListPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \IDG\UserControlBundle\Models\UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', '\IDG\UserControlBundle\Models\UserQuery');
    }

    /**
     * Filter the query by a related Lists object
     *
     * @param   Lists|PropelObjectCollection $lists The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserListQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLists($lists, $comparison = null)
    {
        if ($lists instanceof Lists) {
            return $this
                ->addUsingAlias(UserListPeer::LIST_ID, $lists->getId(), $comparison);
        } elseif ($lists instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserListPeer::LIST_ID, $lists->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByLists() only accepts arguments of type Lists or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lists relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function joinLists($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lists');

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
            $this->addJoinObject($join, 'Lists');
        }

        return $this;
    }

    /**
     * Use the Lists relation Lists object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \IDG\UserControlBundle\Models\ListsQuery A secondary query class using the current class as primary query
     */
    public function useListsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLists($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lists', '\IDG\UserControlBundle\Models\ListsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   UserList $userList Object to remove from the list of results
     *
     * @return UserListQuery The current query, for fluid interface
     */
    public function prune($userList = null)
    {
        if ($userList) {
            $this->addUsingAlias(UserListPeer::ID, $userList->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
