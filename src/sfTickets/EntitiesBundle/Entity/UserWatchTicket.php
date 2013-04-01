<?php

namespace sfTickets\EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserWatchTicket
 *
 * @ORM\Table(name="user_watch_ticket")
 * @ORM\Entity
 */
class UserWatchTicket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     * })
     */
    private $ticket;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ticket
     *
     * @param \sfTickets\EntitiesBundle\Entity\Ticket $ticket
     * @return UserWatchTicket
     */
    public function setTicket(\sfTickets\EntitiesBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;
    
        return $this;
    }

    /**
     * Get ticket
     *
     * @return \sfTickets\EntitiesBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set user
     *
     * @param \sfTickets\EntitiesBundle\Entity\User $user
     * @return UserWatchTicket
     */
    public function setUser(\sfTickets\EntitiesBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \sfTickets\EntitiesBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}