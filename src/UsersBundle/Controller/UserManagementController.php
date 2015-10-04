<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserManagementController extends Controller
{
    public function indexAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUsers();

        return $this->render('UsersBundle:UserManagement:index.html.twig', 
        	array('entities'=>$user));    
    }

}
