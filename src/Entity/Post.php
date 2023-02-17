<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use http\Client\Curl\User;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;
    private ?string $title = null;


    public function getTitle(): ?string
    {
        return $this->title;
    }


    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }


    public function getContent(): string
    {
        return $this->content;
    }


    public function setContent(string $content): void
    {
        $this->content = $content;
    }


    public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(?string $image): void
    {
        $this->image = $image;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user): void
    {
        $this->user = $user;
    }
    private string $content;
    private ?string $image = null;
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
