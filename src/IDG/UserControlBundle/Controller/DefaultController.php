<?php

namespace IDG\UserControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IDG\UserControlBundle\Models\Lists;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $lists = new Lists();
        return $this->render('IDGUserControlBundle:Default:index.html.twig', array('name' => $name));
    }
}
