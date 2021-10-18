<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Groups;


/**
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="App\Repository\FileImgManagerRepository")
 */
class FileImgManager
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"log"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(max=255)
     * @var string
     * @Groups({"log"})
     */
    private $fileName;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $fileSize;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $fileMimeType;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $fileOriginalName;

    /**
     * @Vich\UploadableField(mapping="files", fileNameProperty="fileName", size="fileSize", mimeType="fileMimeType", originalName="fileOriginalName")
     *

     *
     * @var File
     */
    private $file;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tmpFile;





    /*
    * @var string
    *
    * @ORM\Column(name="file_type", type="string", length=255, nullable=true)
    */
    private $fileType;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString(){
        return (string) $this->fileName;
    }

    public function setFile(File $file = null)
    {
        $this->file = $file;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($file) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return FileImgManager
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set tmpFile
     *
     * @param string $tmpFile
     *
     * @return FileImgManager
     */
    public function setTmpFile($tmpFile)
    {
        $this->tmpFile = $tmpFile;

        return $this;
    }

    /**
     * Get tmpFile
     *
     * @return string
     */
    public function getTmpFile()
    {
        return $this->tmpFile;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return FileImgManager
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }


    /*
     * Set fileType
     *
     * @param string $fileType
     *
     * @return FileImgManager
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /*
     * Get fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set fileSize
     *
     * @param string $fileSize
     *
     * @return FileImgManager
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set fileMimeType
     *
     * @param string $fileMimeType
     *
     * @return FileImgManager
     */
    public function setFileMimeType($fileMimeType)
    {
        $this->fileMimeType = $fileMimeType;

        return $this;
    }

    /**
     * Get fileMimeType
     *
     * @return string
     */
    public function getFileMimeType()
    {
        return $this->fileMimeType;
    }

    /**
     * Set fileOriginalName
     *
     * @param string $fileOriginalName
     *
     * @return FileImgManager
     */
    public function setFileOriginalName($fileOriginalName)
    {
        $this->fileOriginalName = $fileOriginalName;

        return $this;
    }

    /**
     * Get fileOriginalName
     *
     * @return string
     */
    public function getFileOriginalName()
    {
        return $this->fileOriginalName;
    }



}
