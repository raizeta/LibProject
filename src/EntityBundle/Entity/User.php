<?php

namespace EntityBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="github_id", type="string", nullable=true)
     */
    private $githubID;


    public function __construct()
    {
        parent::__construct();
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
     * Set githubID
     *
     * @param string $githubID
     *
     * @return User
     */
    public function setGithubID($githubID)
    {
        $this->githubID = $githubID;

        return $this;
    }

    /**
     * Get githubID
     *
     * @return string
     */
    public function getGithubID()
    {
        return $this->githubID;
    }
}
