<?php

namespace sfTickets\EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectHasUser
 *
 * @ORM\Table(name="project_has_user")
 * @ORM\Entity
 */
class ProjectHasUser
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
     * @var integer
     *
     * @ORM\Column(name="project_user_role", type="integer", nullable=true)
     */
    private $projectUserRole;

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
     * Set projectUserRole
     *
     * @param integer $projectUserRole
     * @return ProjectHasUser
     */
    public function setProjectUserRole($projectUserRole)
    {
        $this->projectUserRole = $projectUserRole;
    
        return $this;
    }

    /**
     * Get projectUserRole
     *
     * @return integer 
     */
    public function getProjectUserRole()
    {
        return $this->projectUserRole;
    }

    /**
     * Set project
     *
     * @param \sfTickets\EntitiesBundle\Entity\Project $project
     * @return ProjectHasUser
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
     * @return ProjectHasUser
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