<?php

namespace sfTickets\TicketsBundle\EntityManager;

use Doctrine\Bundle\DoctrineBundle\Registry as EntityManager;

class TicketManager
{
    /**
    * @var EntityManager
    */
    protected $em;

    /**
    * @var EntityRepository
    */
    protected $repository;

    public function __construct(EntityManager $em, $class)
    {

        $this->em = $em->getManager();
        $this->repository = $this->em->getRepository($class);

        $metadata = $this->em->getClassMetadata($class);
        $this->class = $metadata->name;
    }


    
    /**
     * 
     * @param array $options
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findTickets(array $options = array())
    {
        return true;
    }
}
