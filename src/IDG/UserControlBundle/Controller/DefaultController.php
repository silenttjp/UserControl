<?php

namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\UserQuery;
use IDG\UserControlBundle\Models\User;
use IDG\UserControlBundle\Form\Type\UserType;
use Symfony\Component\HttpFoundation\Request;


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
    
    public function newUserFormAction(){
        $user = new User();
        $user_form = $this->createForm(new UserType(), $user);
        
        return $this->render('IDGUserControlBundle:User:new.html.twig', array(
            'form' => $user_form->createView(),
        ));
    }
    
    public function saveNewUserAction(Request $request){
        $user = new User();
        $user_form = $this->createForm(new UserType(), $user);
    
        $user_form->handleRequest($request);
    
        if ($user_form->isValid()) {
            // the validation passed, do something with the $author object
            return ('valid');
           // return $this->redirect($this->generateUrl(...));
        }
        
        return ('not');
    }
}
