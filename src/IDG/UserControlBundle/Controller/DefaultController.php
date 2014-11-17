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
    
    public function newUserFormAction(Request $request){
        $user = new User();
        
        if(null !== ($request->request->get('id'))){
            $user = UserQuery::create()->findPk($request->request->get('id'));
        }
        
        
        $user_form = $this->createForm(new UserType(), $user);
        
        return $this->render('IDGUserControlBundle:User:new.html.twig', array(
            'form' => $user_form->createView(),
        ));
    }
    
    public function saveNewUserAction(Request $request){
        $user = new User();

        

        
            $user = new User();
            
            if(null !== ($request->request->get('id'))){
                $user->setId($request->request->get('id'));
            }
            
            $user->setFirstName($request->request->get('user_firstname'));
            $user->setLastName($request->request->get('user_lastname'));
            $user->save();

        
        $Users = UserQuery::create()->find();
        return $this->render('IDGUserControlBundle:User:list.html.twig',array("users" => $Users));
    }
    
    public function getUserCountAction(Request $request){
        $Users = UserQuery::create()->find();
        return $this->render('IDGUserControlBundle:User:userCount.html.twig', array(  'user_count' => count($Users)));
    }
    
    public function deleteUserAction(Request $request){
        $user = UserQuery::create()->findPk($request->request->get('id'));
        $user->delete();
        
        
       return $this->redirect($this->generateUrl('user_bundle_routing'));
    }
    
    public function editUserAction(Request $request){
        
    }
    
    
}
