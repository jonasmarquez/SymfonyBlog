<?php

namespace Blog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Posts
 *
 * @ORM\Table()
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Posts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

// ----------------------------------------------------------------------------

/**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="post_image", fileNameProperty="imageName", size="imageSize")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Posts
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Posts
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param integer $imageSize
     *
     * @return Posts
     */
    public function setImageSize($imageSize)
    {
        $this->imagesize = $imageSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

//---------------------------------------------------------------------------

    /**
     * @var string
     *
     * @ORM\Column(name="post_autor", type="text")
     */
    private $postAutor;

    /**
     * @var string
     *
     * @ORM\Column(name="post_user", type="text")
     */
    private $postUser;

    /**
     * @var \string
     *
     * @ORM\Column(name="post_date", type="text")
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text")
     */
    private $postContent;

    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="string", length=255)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_image", type="string", length=255)
     */
    private $postImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_status", type="integer")
     */
    private $postStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified", type="datetimetz")
     */
    private $postModified;

    /**
     * @var string
     *
     * @ORM\Column(name="post_url", type="string", length=255)
     */
    private $postUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="post_type", type="string", length=255)
     */
    private $postType;

    /**
     * @var string
     *
     * @ORM\Column(name="post_category", type="string", length=255)
     */
    private $postCategory;


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
     * Set postAutor
     *
     * @param integer $postAutor
     * @return Posts
     */
    public function setPostAutor($postAutor)
    {
        $this->postAutor = $postAutor;

        return $this;
    }

    /**
     * Get postAutor
     *
     * @return integer
     */
    public function getPostAutor()
    {
        return $this->postAutor;
    }

    /**
     * Set postUser
     *
     * @param integer $postUser
     * @return Posts
     */
    public function setPostUser($postUser)
    {
        $this->postUser = $postUser;

        return $this;
    }

    /**
     * Get postUser
     *
     * @return integer
     */
    public function getPostUser()
    {
        return $this->postUser;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Posts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     * @return Posts
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     * @return Posts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postStatus
     *
     * @param integer $postStatus
     * @return Posts
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;

        return $this;
    }

    /**
     * Get postStatus
     *
     * @return integer
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * Set postModified
     *
     * @param \DateTime $postModified
     * @return Posts
     */
    public function setPostModified($postModified)
    {
        $this->postModified = $postModified;

        return $this;
    }

    /**
     * Get postModified
     *
     * @return \DateTime
     */
    public function getPostModified()
    {
        return $this->postModified;
    }

    /**
     * Set postUrl
     *
     * @param string $postUrl
     * @return Posts
     */
    public function setPostUrl($postUrl)
    {
        $this->postUrl = $postUrl;

        return $this;
    }

    /**
     * Get postUrl
     *
     * @return string
     */
    public function getPostUrl()
    {
        return $this->postUrl;
    }

    /**
     * Set postType
     *
     * @param string $postType
     * @return Posts
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;

        return $this;
    }

    /**
     * Get postType
     *
     * @return string
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Set postCategory
     *
     * @param string $postCategory
     * @return Posts
     */
    public function setPostCategory($postCategory)
    {
        $this->postCategory = $postCategory;

        return $this;
    }

    /**
     * Get postCategory
     *
     * @return string
     */
    public function getPostCategory()
    {
        return $this->postCategory;
    }
}
