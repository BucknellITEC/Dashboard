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
	protected $CourseNumber;
    
	/**
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank()
	**/
	protected $Name;
	
        /**
	* @ORM\OneToMany(targetEntity="Assignment", mappedBy="Course")
	**/
	protected $Assignments;
        
        /**
	* @ORM\Column(type="integer", nullable = true)
	**/
	protected $StudentsEnrolled;
        
	/**
         * @ORM\Column(type="string")
         */
        protected $Department;
	
	/**
	* @ORM\ManyToMany(targetEntity="Faculty")
	**/	
        protected $Faculty;
        
        /**
         * @ORM\ManyToOne(targetEntity="Dashboard\UserBundle\Entity\User", inversedBy="Courses")
         */
        protected $creator;
	
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->Assignment = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
        $this->Name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
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
     * Set Faculty
     *
     * @param string $faculty
     * @return Assignment
     */
    public function setFaculty($faculty)
    {
        $this->Faculty = $faculty;

        return $this;
    }

    /**
     * Get Faculty
     *
     * @return string 
     */
    public function getFaculty()
    {
        return $this->Faculty;
    }

    /**
     * Set TechTools
     *
     * @param string $techTools
     * @return Assignment
     */
    public function setTechTools($techTools)
    {
        $this->TechTools = $techTools;

        return $this;
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

    /**
     * Add Faculty
     *
     * @param \Dashboard\AssignmentBundle\Entity\Faculty $faculty
     * @return Course
     */
    public function addFaculty(\Dashboard\AssignmentBundle\Entity\Faculty $faculty)
    {
        $this->Faculty[] = $faculty;

        return $this;
    }

    /**
     * Remove Faculty
     *
     * @param \Dashboard\AssignmentBundle\Entity\Faculty $faculty
     */
    public function removeFaculty(\Dashboard\AssignmentBundle\Entity\Faculty $faculty)
    {
        $this->Faculty->removeElement($faculty);
    }
    
    
    /**
     * Set CourseNumber
     *
     * @param string $courseNumber
     * @return Course
     */
    public function setCourseNumber($courseNumber)
    {
        $this->CourseNumber = $courseNumber;

        return $this;
    }

    /**
     * Get CourseNumber
     *
     * @return string 
     */
    public function getCourseNumber()
    {
        return $this->CourseNumber;
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

    /**
     * Set Creator
     *
     * @param \Dashboard\UserBundle\Entity\User $creator
     * @return Course
     */
    public function setCreator(\Dashboard\UserBundle\Entity\User $creator = null)
    {
        $this->Creator = $creator;

        return $this;
    }

    /**
     * Get Creator
     *
     * @return \Dashboard\UserBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->Creator;
    }
}
