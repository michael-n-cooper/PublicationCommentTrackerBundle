<?php
namespace W3C\PublicationCommentTrackerBundle\Entity;

// Data model configuration in @W3CPublicationCommentTrackerBundle\Resources\Config\doctrine\Reviews.orm.yml

use W3C\PublicationCommentTracker\Types;

class Reviews
{
	protected $id;
	protected $svid; // spec version id against which comment filed
	protected $wgid; // working group id that filed comment
	protected $uid; // user id that filed comment
	protected $outcome;
	protected $notes;
	protected $timestamp;

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
     * @return Reviews
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
     * @return Reviews
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
     * @return Reviews
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
     * Set outcome
     *
     * @param review_outcome $outcome
     * @return Reviews
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;

        return $this;
    }

    /**
     * Get outcome
     *
     * @return review_outcome 
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Reviews
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
     * Set timestamp
     *
     * @param \datetime $timestamp
     * @return Reviews
     */
    public function setTimestamp(\datetime $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \datetime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
