<?php


namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use IDG\UserControlBundle\Models\UserQuery;


class UserListController extends Controller
{
    public function indexAction()
    {
        //get all users

        $users = UserQuery::create()->find();
        
        $user = new User();

        return $this->render('IDGUserControlBundle:User:user.html.twig', array(
            'users' => $users->toArray()
            ,'user_count' => count($users)

         ));
    }
}
