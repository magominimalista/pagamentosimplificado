<?php

declare(strict_types = 1);

namespace Src\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('validations')]

class Validations
{
    #[Id] 
    #[Column, GeneratedValue]
    private int $id;

    #[ManyToOne (
        inversedBy: "validations",
        targetEntity: Users::class
    )]
    public readonly Users $users;

    #[Column]
    private string $key;

    #[Column]
    private bool $active;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    #[Column(name: 'updated_at', nullable:true)]
    private \DateTime $updatedAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Validations
    {
        $this->id = $id;

        return $this;
    }

    public function setUsers(Users $users): void
    {
        $this->users = $users;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): Validations
    {
        $this->key = $key;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): Validations
    {
        $this->active = $active;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Validations
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): Validations
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}