<?php
namespace W3C\PublicationCommentTrackerBundle\Entity;

// Data model configuration in @W3CPublicationCommentTrackerBundle\Resources\Config\doctrine\ReviewInterests.orm.yml

class ReviewInterests
{
	protected $id;
	protected $interest;
	
	protected $userknowledge;
	public function __construct()
	{
		$this->userknowledge = new ArrayCollection();
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
     * Set interest
     *
     * @param string $interest
     * @return ReviewInterests
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string 
     */
    public function getInterest()
    {
        return $this->interest;
    }
    
    /**
     * Add userknowledge
     *
     * @param \W3C\PublicationCommentTrackerBundle\Entity\UserKnowledge $userknowledge
     * @return ReviewInterests
     */
    public function addUserknowledge(\W3C\PublicationCommentTrackerBundle\Entity\UserKnowledge $userknowledge)
    {
        $this->userknowledge[] = $userknowledge;

        return $this;
    }

    /**
     * Remove userknowledge
     *
     * @param \W3C\PublicationCommentTrackerBundle\Entity\UserKnowledge $userknowledge
     */
    public function removeUserknowledge(\W3C\PublicationCommentTrackerBundle\Entity\UserKnowledge $userknowledge)
    {
        $this->userknowledge->removeElement($userknowledge);
    }

    /**
     * Get userknowledge
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserknowledge()
    {
        return $this->userknowledge;
    }
}
