<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $psuedo;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $idPost;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePosted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPsuedo(): ?string
    {
        return $this->psuedo;
    }

    public function setPsuedo(string $psuedo): self
    {
        $this->psuedo = $psuedo;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function setIdPost(int $idPost): self
    {
        $this->idPost = $idPost;

        return $this;
    }

    public function getDatePosted(): ?\DateTimeInterface
    {
        return $this->datePosted;
    }

    public function setDatePosted(\DateTimeInterface $datePosted): self
    {
        $this->datePosted = $datePosted;

        return $this;
    }
}
