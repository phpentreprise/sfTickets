<?php

namespace SfTickets\EntitiesBundle\Entity;

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


}
