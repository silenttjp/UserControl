<?php

namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\Lists;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $Users = UserQuery::create()->find();
        print_r($Users);
        return $this->render('IDGUserControlBundle:Default:index.html.twig', array('name' => $name));
    }
}
