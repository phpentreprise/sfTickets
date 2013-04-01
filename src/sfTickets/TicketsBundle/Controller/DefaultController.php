<?php

namespace sfTickets\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sfTicketsTicketsBundle:Default:index.html.twig', array('name' => $name));
    }
}
