<?php

namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\UserQuery;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Users = UserQuery::create()->find();
        print_r($Users->ToArray());
        return $this->render('IDGUserControlBundle:User:user.html.twig', array('users' => $Users->ToArray(),  'user_count' => count($Users)));
    }
}
