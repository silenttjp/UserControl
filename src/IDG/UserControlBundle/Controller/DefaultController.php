<?php

namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\UserQuery;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Users = UserQuery::create()->find();
        print_r($Users);
        return $this->render('IDGUserControlBundle:User:user.html.twig', array('name' => $name));
    }
}
