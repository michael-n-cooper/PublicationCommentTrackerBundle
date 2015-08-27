<?php
namespace W3C\PublicationCommentTrackerBundle\Entity;

// Data model configuration in @W3CPublicationCommentTrackerBundle\Resources\Config\doctrine\UserKnowledge.orm.yml

class UserKnowledge
{
	protected $id;
	protected $uid; // user id with knowledge
	protected $riid; // review interest id
	protected $sgid; // spec group id
    /**
     * @var \W3C\PublicationCommentTrackerBundle\Entity\ReviewInterests
     */
    private $reviewInterest;


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
     * Set uid
     *
     * @param integer $uid
     * @return UserKnowledge
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set riid
     *
     * @param integer $riid
     * @return UserKnowledge
     */
    public function setRiid($riid)
    {
        $this->riid = $riid;

        return $this;
    }

    /**
     * Get riid
     *
     * @return integer 
     */
    public function getRiid()
    {
        return $this->riid;
    }

    /**
     * Set sgid
     *
     * @param string $sgid
     * @return UserKnowledge
     */
    public function setSgid($sgid)
    {
        $this->sgid = $sgid;

        return $this;
    }

    /**
     * Get sgid
     *
     * @return string 
     */
    public function getSgid()
    {
        return $this->sgid;
    }

    /**
     * Set reviewInterest
     *
     * @param \W3C\PublicationCommentTrackerBundle\Entity\ReviewInterests $reviewInterest
     * @return UserKnowledge
     */
    public function setReviewInterest(\W3C\PublicationCommentTrackerBundle\Entity\ReviewInterests $reviewInterest = null)
    {
        $this->reviewInterest = $reviewInterest;

        return $this;
    }

    /**
     * Get reviewInterest
     *
     * @return \W3C\PublicationCommentTrackerBundle\Entity\ReviewInterests 
     */
    public function getReviewInterest()
    {
        return $this->reviewInterest;
    }
}
