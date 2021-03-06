<?php

namespace IDG\UserControlBundle\Models\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'User' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.IDG.UserControlBundle.Models.map
 */
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.IDG.UserControlBundle.Models.map.UserTableMap';

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
        $this->setName('User');
        $this->setPhpName('User');
        $this->setClassname('IDG\\UserControlBundle\\Models\\User');
        $this->setPackage('src.IDG.UserControlBundle.Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('First_Name', 'FirstName', 'VARCHAR', false, 100, null);
        $this->getColumn('First_Name', false)->setPrimaryString(true);
        $this->addColumn('Last_Name', 'LastName', 'VARCHAR', false, 100, null);
        $this->getColumn('Last_Name', false)->setPrimaryString(true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UserList', 'IDG\\UserControlBundle\\Models\\UserList', RelationMap::ONE_TO_MANY, array('ID' => 'User_ID', ), null, null, 'UserLists');
    } // buildRelations()

} // UserTableMap
