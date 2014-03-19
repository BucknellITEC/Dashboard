  <div align="left"></div>
<?php

namespace Dashboard\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\CourseBundle\Entity\AssignmentRepository")
 */
class Assignment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	* @ORM\Column(type="string", length=100)
	**/
	protected $name;
	
	/**
	* @ORM\Column(type="text")
	**/
	protected $BriefDescr;
	
	/**
	* @ORM\Column(type="text")
	**/
	protected $LongDescr;
	
	/**
	* @ORM\OneToMany(targetEntity="Course", mappedBy="Assignment")
	**/
	protected $Course;
	
	public function _construct()
	{
		$this->Course = new ArrayCollection();
		}
	
	protected $Semester;
	
	protected $Faculty;
	
	/**
	* @ORM\Column(type="integer")
	**/
	protected $StudentsEnrolled;
	
	protected $TechTools;
	
	protected $TechCatory;
	
	/**
	* @ORM\Column(type="boolean")
	**/
	protected $Showcase;
	
		/**
	* @ORM\Column(type="text")
	**/
	protected $ProjectURL;
	
	
	protected $AssociatedFile;
	
		/**
	* @ORM\Column(type="string")
	**/
	protected $KeyWords;
	
	protected $ItecStaff;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
