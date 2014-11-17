<?php

namespace IDG\UserControlBundle\Models;

use IDG\UserControlBundle\Models\om\BaseUser;
use IDG\UserControlBundle\Models\ListsQuery;

class User extends BaseUser
{
    public function getLists(){
        return ListsQuery::create()->find();
    }
}
