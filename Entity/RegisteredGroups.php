<?php
namespace W3C\PublicationCommentTrackerBundle\Entity;

// Data model configuration in @W3CPublicationCommentTrackerBundle\Resources\Config\doctrine\RegisteredGroups.orm.yml

class RegisteredGroups
{
	protected $id;

    /**
     * Set id
     *
     * @param integer $id
     * @return RegisteredGroups
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}
