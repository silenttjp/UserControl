<?php



namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\UserQuery;
use IDG\UserControlBundle\Models\ListsQuery;
use IDG\UserControlBundle\Models\User;
use IDG\UserControlBundle\Form\Type\UserType;
use IDG\UserControlBundle\Form\Type\ListsType;
use Symfony\Component\HttpFoundation\Request;
use IDG\UserControlBundle\Models\Lists;



class DefaultController extends Controller
{
    public function indexAction()
    {
        $Users = UserQuery::create()->find();
        $Lists = ListsQuery::create()->find();

        return $this->render('IDGUserControlBundle:User:user.html.twig', array(  'user_count' => count($Users), 'lists_count' => count($Lists)
        ));
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
    
    public function newListsFormAction(Request $request){
        $lists = new Lists();
        
        if(null !== ($request->request->get('id'))){
            $lists = ListsQuery::create()->findPk($request->request->get('id'));
        }
        
        $list_form = $this->createForm(new ListsType(), $lists);
        
        return $this->render('IDGUserControlBundle:lists:new.html.twig', array(
            'form' => $list_form->createView(),
        ));
        
    }
    
    public function saveNewUserAction(){

            $request = $this->getRequest();
            
            if(!empty($request->request->get('user_id'))){
                $user = UserQuery::create()->findPk($request->request->get('user_id'));
            } else {
                $user = new User();
            }
            
            $user->setFirstName($request->request->get('user_firstname'));
            $user->setLastName($request->request->get('user_lastname'));
            $user->save();

        
        $Users = UserQuery::create()->find();
        return $this->render('IDGUserControlBundle:User:list.html.twig',array("users" => $Users));
    }
    
    public function saveNewListAction(){

        $request = $this->getRequest();
    
        if(!empty($request->request->get('list_id'))){
            $lists = ListsQuery::create()->findPk($request->request->get('list_id'));
        } else {
            $lists = new Lists();
        }
    
        $lists->setName($request->request->get('list_name'));
        $lists->setActive('1');
        $lists->save();
    
    
        $Lists = ListsQuery::create()->find();
        return $this->render('IDGUserControlBundle:lists:list.html.twig',array("lists" => $Lists));
    }
    
    public function getUserCountAction(Request $request){
        $Users = UserQuery::create()->find();
        return $this->render('IDGUserControlBundle:User:userCount.html.twig', array(  'user_count' => count($Users)));
    }
    
    public function getListsCountAction(Request $request){
        $Lists = ListsQuery::create()->find();
        return $this->render('IDGUserControlBundle:lists:listsCount.html.twig', array(  'lists_count' => count($Lists)));
    }
    
    public function deleteUserAction(Request $request){
        $user = UserQuery::create()->findPk($request->request->get('id'));
        $user->delete();
        
        
       return $this->redirect($this->generateUrl('user_bundle_routing'));
    }
    
    public function deletelistAction(Request $request){
        $lists = ListsQuery::create()->findPk($request->request->get('id'));
        $lists->delete();
    
    
        return $this->redirect($this->generateUrl('get_lists_routing'));
    }
    
    
    public function getListsAction(){
         
        $Lists = ListsQuery::create()->find();
         
    
        return $this->render('IDGUserControlBundle:lists:list.html.twig',array("lists" => $Lists));
    }
    
    
}
