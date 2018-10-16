<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Category
 * @package AppBundle\Entity
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="category")
     */
    private $blogPosts;

    public function __construct()
    {
        $this->blogPosts = new ArrayCollection();
    }

    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

