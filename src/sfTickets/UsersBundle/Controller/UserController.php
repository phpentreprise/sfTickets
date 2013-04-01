<?php

namespace sfTickets\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sfTicketsUsersBundle:Default:index.html.twig', array('name' => $name));
    }
}
