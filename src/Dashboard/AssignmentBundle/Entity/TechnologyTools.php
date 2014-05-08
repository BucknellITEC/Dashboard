<?php

namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TechnologyTools
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\AssignmentBundle\Entity\TechnologyToolsRepository")
 */
class TechnologyTools
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

        /**
	* @ORM\ManyToMany(targetEntity="Assignment")
	**/
	protected $Assignments;
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
     * Set name
     *
     * @param string $name
     * @return TechnologyTools
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Assignments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Assignments
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignments
     * @return TechnologyTools
     */
    public function addAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignments)
    {
        $this->Assignments[] = $assignments;

        return $this;
    }

    /**
     * Remove Assignments
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignments
     */
    public function removeAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignments)
    {
        $this->Assignments->removeElement($assignments);
    }

    /**
     * Get Assignments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignments()
    {
        return $this->Assignments;
    }
}
