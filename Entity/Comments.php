<?php
namespace W3C\PublicationCommentTrackerBundle\Entity;

// Data model configuration in @W3CPublicationCommentTrackerBundle\Resources\Config\doctrine\Comments.orm.yml

class Comments
{
	protected $id;
	protected $svid; // spec version id against which comment filed
	protected $wgid; // working group id that filed comment
	protected $uid; // user id that filed comment
	protected $label;
	
	protected $commenthistory;
	public function __construct()
	{
		$this->commenthistory = new ArrayCollection();
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
     * Set svid
     *
     * @param integer $svid
     * @return Comments
     */
    public function setSvid($svid)
    {
        $this->svid = $svid;

        return $this;
    }

    /**
     * Get svid
     *
     * @return integer 
     */
    public function getSvid()
    {
        return $this->svid;
    }

    /**
     * Set wgid
     *
     * @param integer $wgid
     * @return Comments
     */
    public function setWgid($wgid)
    {
        $this->wgid = $wgid;

        return $this;
    }

    /**
     * Get wgid
     *
     * @return integer 
     */
    public function getWgid()
    {
        return $this->wgid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return Comments
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
     * Set label
     *
     * @param string $label
     * @return Comments
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add commenthistory
     *
     * @param \W3C\PublicationCommentTrackerBundle\Entity\CommentHistory $commenthistory
     * @return Comments
     */
    public function addCommenthistory(\W3C\PublicationCommentTrackerBundle\Entity\CommentHistory $commenthistory)
    {
        $this->commenthistory[] = $commenthistory;

        return $this;
    }

    /**
     * Remove commenthistory
     *
     * @param \W3C\PublicationCommentTrackerBundle\Entity\CommentHistory $commenthistory
     */
    public function removeCommenthistory(\W3C\PublicationCommentTrackerBundle\Entity\CommentHistory $commenthistory)
    {
        $this->commenthistory->removeElement($commenthistory);
    }

    /**
     * Get commenthistory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommenthistory()
    {
        return $this->commenthistory;
    }
}
