<?php

namespace IDG\UserControlBundle\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'Lists' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.IDG.UserControlBundle.map
 */
class ListsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.IDG.UserControlBundle.map.ListsTableMap';

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
        $this->setName('Lists');
        $this->setPhpName('Lists');
        $this->setClassname('IDG\\UserControlBundle\\Lists');
        $this->setPackage('src.IDG.UserControlBundle');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Name', 'Name', 'VARCHAR', false, 100, null);
        $this->getColumn('Name', false)->setPrimaryString(true);
        $this->addColumn('Active', 'Active', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User_List', 'IDG\\UserControlBundle\\User_List', RelationMap::ONE_TO_MANY, array('ID' => 'List_ID', ), null, null, 'User_Lists');
    } // buildRelations()

} // ListsTableMap
