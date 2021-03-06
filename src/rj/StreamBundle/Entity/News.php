<?php

namespace rj\StreamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="tag1", type="string", length=255)
     */
    private $tag1;
    /**
     * @var string
     *
     * @ORM\Column(name="tag2", type="string", length=255)
     */
    private $tag2;
    /**
     * @var string
     *
     * @ORM\Column(name="tag3", type="string", length=255)
     */
    private $tag3;


    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set titre
     *
     * @param string $titre
     * @return News
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return News
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return News
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return News
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return News
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return News
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
    

    /**
     * Set tag1
     *
     * @param string $tag1
     * @return News
     */
    public function setTag1($tag1)
    {
        $this->tag1 = $tag1;

        return $this;
    }

    /**
     * Get tag1
     *
     * @return string 
     */
    public function getTag1()
    {
        return $this->tag1;
    }

    /**
     * Set tag2
     *
     * @param string $tag2
     * @return News
     */
    public function setTag2($tag2)
    {
        $this->tag2 = $tag2;

        return $this;
    }

    /**
     * Get tag2
     *
     * @return string 
     */
    public function getTag2()
    {
        return $this->tag2;
    }

    /**
     * Set tag3
     *
     * @param string $tag3
     * @return News
     */
    public function setTag3($tag3)
    {
        $this->tag3 = $tag3;

        return $this;
    }

    /**
     * Get tag3
     *
     * @return string 
     */
    public function getTag3()
    {
        return $this->tag3;
    }
}
