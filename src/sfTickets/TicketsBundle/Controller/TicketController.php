<?php

/**
* This file is part of the sfTickets project.
*
* (c) ...
*/

namespace sfTickets\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends Controller
{
    /**
     *  Shows the list of tickets
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        
        $options = array();

        $tickets = $this->container->get('sf_tickets_tickets.manager')->findTickets();
        
        
        
        return $this->render('sfTicketsTicketsBundle:Ticket:index.html.twig');
    }
}
