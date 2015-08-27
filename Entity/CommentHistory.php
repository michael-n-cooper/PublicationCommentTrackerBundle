<?php
namespace W3C\PublicationCommentTrackerBundle\Entity;

// Data model configuration in @W3CPublicationCommentTrackerBundle\Resources\Config\doctrine\CommentHistory.orm.yml

use W3C\PublicationCommentTracker\Types;

class CommentHistory
{
	protected $id;
	protected $cid;
	protected $status;
	protected $disposition;
	protected $acknowledgement;
	protected $notes;
	protected $changedby;
	protected $timestamp;
	
	private $comment;

    /**
     * @var \W3C\PublicationCommentTrackerBundle\Entity\Comments
     */
    private $category;


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
     * Set cid
     *
     * @param integer $cid
     * @return CommentHistory
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set status
     *
     * @param comment_status $status
     * @return CommentHistory
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return comment_status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set disposition
     *
     * @param comment_response $disposition
     * @return CommentHistory
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;

        return $this;
    }

    /**
     * Get disposition
     *
     * @return comment_response 
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Set acknowledgement
     *
     * @param comment_response $acknowledgement
     * @return CommentHistory
     */
    public function setAcknowledgement($acknowledgement)
    {
        $this->acknowledgement = $acknowledgement;

        return $this;
    }

    /**
     * Get acknowledgement
     *
     * @return comment_response 
     */
    public function getAcknowledgement()
    {
        return $this->acknowledgement;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return CommentHistory
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set changedby
     *
     * @param string $changedby
     * @return CommentHistory
     */
    public function setChangedby($changedby)
    {
        $this->changedby = $changedby;

        return $this;
    }

    /**
     * Get changedby
     *
     * @return string 
     */
    public function getChangedby()
    {
        return $this->changedby;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return CommentHistory
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * @var \W3C\PublicationCommentTrackerBundle\Entity\Comments
     */


    /**
     * Set comment
     *
     * @param \W3C\PublicationCommentTrackerBundle\Entity\Comments $comment
     * @return CommentHistory
     */
    public function setComment(\W3C\PublicationCommentTrackerBundle\Entity\Comments $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \W3C\PublicationCommentTrackerBundle\Entity\Comments 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
