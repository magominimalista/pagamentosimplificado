<?php

declare(strict_types = 1);

namespace Src\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('users_type')]

class UsersType
{
    #[Id] 
    #[Column, GeneratedValue]
    private int $id;

    #[Column(length: 10)]
    private string $type;

    #[OneToOne (
        mappedBy: "usersType",
        targetEntity: UsersType::class
    )]
    private Collection $usersType;

    public function __construct() {
        $this->usersType = new  Collection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UsersType
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): UsersType
    {
        $this->type = $type;

        return $this;
    }

    public function usersType(): Collection
    {
        return $this->usersType;
    }
}