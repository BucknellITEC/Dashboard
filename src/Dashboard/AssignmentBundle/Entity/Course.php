<?php

namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Course
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\AssignmentBundle\Entity\CourseRepository")
 */
class Course
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
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank()
	**/
	protected $name;
	
        /**
	* @ORM\OneToMany(targetEntity="Assignment", mappedBy="Course")
	**/
	protected $Assignment;
        
        /**
	* @ORM\Column(type="integer", nullable = true)
	**/
	protected $StudentsEnrolled;
        
        /**
         * @ORM\Column(type="string")
         */
        protected $Department;

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
     * @return Course
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
     * Set Assignment
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignment
     * @return Course
     */
    public function setAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignment = null)
    {
        $this->Assignment = $assignment;

        return $this;
    }

    /**
     * Get Assignment
     *
     * @return \Dashboard\AssignmentBundle\Entity\Assignment 
     */
    public function getAssignment()
    {
        return $this->Assignment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Assignment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set StudentsEnrolled
     *
     * @param integer $studentsEnrolled
     * @return Course
     */
    public function setStudentsEnrolled($studentsEnrolled)
    {
        $this->StudentsEnrolled = $studentsEnrolled;

        return $this;
    }

    /**
     * Get StudentsEnrolled
     *
     * @return integer 
     */
    public function getStudentsEnrolled()
    {
        return $this->StudentsEnrolled;
    }

    /**
     * Set Department
     *
     * @param string $department
     * @return Course
     */
    public function setDepartment($department)
    {
        $this->Department = $department;

        return $this;
    }

    /**
     * Get Department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * Add Assignment
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignment
     * @return Course
     */
    public function addAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignment)
    {
        $this->Assignment[] = $assignment;

        return $this;
    }

    /**
     * Remove Assignment
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignment
     */
    public function removeAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignment)
    {
        $this->Assignment->removeElement($assignment);
    }
}
