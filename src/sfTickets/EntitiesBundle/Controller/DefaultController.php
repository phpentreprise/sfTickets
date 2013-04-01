<?php

namespace sfTickets\EntitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sfTicketsEntitiesBundle:Default:index.html.twig', array('name' => $name));
    }
}
