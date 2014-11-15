<?php

namespace IDG\UserControlBundle\Models\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'User_List' table.
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
class UserListTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.IDG.UserControlBundle.Models.map.UserListTableMap';

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
        $this->setName('User_List');
        $this->setPhpName('UserList');
        $this->setClassname('IDG\\UserControlBundle\\Models\\UserList');
        $this->setPackage('src.IDG.UserControlBundle.Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('User_ID', 'UserId', 'INTEGER', 'User', 'ID', true, null, null);
        $this->addForeignKey('List_ID', 'ListId', 'INTEGER', 'Lists', 'ID', true, null, null);
        $this->addColumn('Date_Added', 'DateAdded', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'IDG\\UserControlBundle\\Models\\User', RelationMap::MANY_TO_ONE, array('User_ID' => 'ID', ), null, null);
        $this->addRelation('Lists', 'IDG\\UserControlBundle\\Models\\Lists', RelationMap::MANY_TO_ONE, array('List_ID' => 'ID', ), null, null);
    } // buildRelations()

} // UserListTableMap
