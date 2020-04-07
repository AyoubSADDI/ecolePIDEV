<?php

namespace MonLivreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Monlivre
 *
 * @ORM\Table(name="monlivre")
 * Vich\Uploadable
 * @ORM\Entity
 */
class Monlivre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCour", type="string", length=50, nullable=false)
     */
    private $NomCour;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=false)
     */
    private $video;


    /**
     * @Vich\UploadableField(mapping="Monlivre", size="500000000k", fileNameProperty="video")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;



    /**
     * @var \MonLivreBundle\Entity\Matieremonlivre
     *
     * @ORM\ManyToOne(targetEntity="\MonLivreBundle\Entity\Matieremonlivre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Matieremonlivre", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $matiere;




    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param string $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }
    /**
     * @return string
     */
    public function getNomCour()
    {
        return $this->NomCour;
    }

    /**
     * @param string $NomCour
     */
    public function setNomCour($NomCour)
    {
        $this->NomCour = $NomCour;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return Matieremonlivre
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param Matieremonlivre $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }



}

