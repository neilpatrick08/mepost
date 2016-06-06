<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $textPost;

    /**
     * @var \DateTime
     */
    private $postDateTime;

    /**
     * @var int
     */
    private $claps;


    public function __construct()
    {
        $this->postDateTime = new \DateTime();
        $this->claps = 0;
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
     * Set userId
     *
     * @param integer $userId
     * @return Post
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set textPost
     *
     * @param string $textPost
     * @return Post
     */
    public function setTextPost($textPost)
    {
        $this->textPost = $textPost;

        return $this;
    }

    /**
     * Get textPost
     *
     * @return string 
     */
    public function getTextPost()
    {
        return $this->textPost;
    }

    /**
     * Set postDateTime
     *
     * @param \DateTime $postDateTime
     * @return Post
     */
    public function setpostDateTime($postDateTime)
    {
        $this->postDateTime = $postDateTime;

        return $this;
    }

    /**
     * Get postDateTime
     *
     * @return \DateTime 
     */
    public function getpostDateTime()
    {
        return $this->postDateTime;
    }

    /**
     * Set claps
     *
     * @param integer $claps
     * @return Post
     */
    public function setClaps($claps)
    {
        $this->claps = $claps;

        return $this;
    }

    /**
     * Get claps
     *
     * @return integer 
     */
    public function getClaps()
    {
        return $this->claps;
    }
    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Post
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
