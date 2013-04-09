<?php

namespace sfTickets\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket
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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="assignee", type="integer", nullable=false)
     */
    private $assignee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="term", type="datetime", nullable=true)
     */
    private $term;

    /**
     * @var integer
     *
     * @ORM\Column(name="hours", type="integer", nullable=true)
     */
    private $hours;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=45, nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=45, nullable=false)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="ticketcol", type="string", length=45, nullable=true)
     */
    private $ticketcol;

    /**
     * @var \TicketStatus
     *
     * @ORM\ManyToOne(targetEntity="TicketStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_status_id", referencedColumnName="id")
     * })
     */
    private $ticketStatus;

    /**
     * @var \Evolution
     *
     * @ORM\ManyToOne(targetEntity="Evolution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evolution_id", referencedColumnName="id")
     * })
     */
    private $evolution;

    /**
     * @var \Priority
     *
     * @ORM\ManyToOne(targetEntity="Priority")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="priority_id", referencedColumnName="id")
     * })
     */
    private $priority;

    /**
     * @var \TicketType
     *
     * @ORM\ManyToOne(targetEntity="TicketType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_type_id", referencedColumnName="id")
     * })
     */
    private $ticketType;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;

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
     * Set subject
     *
     * @param string $subject
     * @return Ticket
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set assignee
     *
     * @param integer $assignee
     * @return Ticket
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    
        return $this;
    }

    /**
     * Get assignee
     *
     * @return integer 
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * Set term
     *
     * @param \DateTime $term
     * @return Ticket
     */
    public function setTerm($term)
    {
        $this->term = $term;
    
        return $this;
    }

    /**
     * Get term
     *
     * @return \DateTime 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set hours
     *
     * @param integer $hours
     * @return Ticket
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    
        return $this;
    }

    /**
     * Get hours
     *
     * @return integer 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Ticket
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Ticket
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return Ticket
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    
        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Ticket
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set ticketcol
     *
     * @param string $ticketcol
     * @return Ticket
     */
    public function setTicketcol($ticketcol)
    {
        $this->ticketcol = $ticketcol;
    
        return $this;
    }

    /**
     * Get ticketcol
     *
     * @return string 
     */
    public function getTicketcol()
    {
        return $this->ticketcol;
    }

    /**
     * Set ticketStatus
     *
     * @param \sfTickets\EntitiesBundle\Entity\TicketStatus $ticketStatus
     * @return Ticket
     */
    public function setTicketStatus(\sfTickets\EntitiesBundle\Entity\TicketStatus $ticketStatus = null)
    {
        $this->ticketStatus = $ticketStatus;
    
        return $this;
    }

    /**
     * Get ticketStatus
     *
     * @return \sfTickets\EntitiesBundle\Entity\TicketStatus 
     */
    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    /**
     * Set evolution
     *
     * @param \sfTickets\EntitiesBundle\Entity\Evolution $evolution
     * @return Ticket
     */
    public function setEvolution(\sfTickets\EntitiesBundle\Entity\Evolution $evolution = null)
    {
        $this->evolution = $evolution;
    
        return $this;
    }

    /**
     * Get evolution
     *
     * @return \sfTickets\EntitiesBundle\Entity\Evolution 
     */
    public function getEvolution()
    {
        return $this->evolution;
    }

    /**
     * Set priority
     *
     * @param \sfTickets\EntitiesBundle\Entity\Priority $priority
     * @return Ticket
     */
    public function setPriority(\sfTickets\EntitiesBundle\Entity\Priority $priority = null)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return \sfTickets\EntitiesBundle\Entity\Priority 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set ticketType
     *
     * @param \sfTickets\EntitiesBundle\Entity\TicketType $ticketType
     * @return Ticket
     */
    public function setTicketType(\sfTickets\EntitiesBundle\Entity\TicketType $ticketType = null)
    {
        $this->ticketType = $ticketType;
    
        return $this;
    }

    /**
     * Get ticketType
     *
     * @return \sfTickets\EntitiesBundle\Entity\TicketType 
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Set project
     *
     * @param \sfTickets\EntitiesBundle\Entity\Project $project
     * @return Ticket
     */
    public function setProject(\sfTickets\EntitiesBundle\Entity\Project $project = null)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return \sfTickets\EntitiesBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set user
     *
     * @param \sfTickets\EntitiesBundle\Entity\User $user
     * @return Ticket
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