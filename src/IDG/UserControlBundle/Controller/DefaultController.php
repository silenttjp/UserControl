<?php

namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\UserQuery;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Users = UserQuery::create()->find();

        return $this->render('IDGUserControlBundle:User:user.html.twig', array(  'user_count' => count($Users)));
    }
    
    public function getUsersAction(){
       
        $Users = UserQuery::create()->find();
         

         return $this->render('IDGUserControlBundle:User:list.html.twig',array("users" => $Users));
    }
}
