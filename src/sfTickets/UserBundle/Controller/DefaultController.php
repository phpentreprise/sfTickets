<?php

namespace sfTickets\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sfTicketsUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
