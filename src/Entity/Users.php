<?php

declare(strict_types = 1);

namespace Src\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('users')]

class Users
{
    #[Id] 
    #[Column, GeneratedValue]
    private int $id;

    #[OneToOne (
        inversedBy: "Users",
        targetEntity: UsersType::class
    )]
    public readonly UsersType $usersType;

    #[Column(length: 100)]
    private string $name;

    #[Column(length: 100)]
    private string $email;

    #[Column(length: 15)]
    private string $cpf;

    #[Column]
    private string $password;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    #[OneToOne (
        mappedBy: "users",
        targetEntity: Account::class,
        cascade: ["persist", "remove"]
    )]
    private Collection $account;

    #[OneToMany(
        mappedBy: "users",
        targetEntity: Transations::class,
        cascade: ["persist", "remove"]
    )]
    private Collection $transations;

    #[OneToMany(
        mappedBy: "users",
        targetEntity: Validations::class,
        cascade: ["persist", "remove"]
    )]
    private Collection $validations;

    public function __construct() {
        $this->account = new  Collection();
        $this->transations = new  ArrayCollection();
        $this->validations = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setUsersType(Users $usersType): void
    {
        $this->usersType = $usersType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Users
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): Users
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): Users
    {
        $this->password = $password;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Users
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function account(): Collection
    {
        return $this->account;
    }

    public function transations(): Collection
    {
        return $this->transations;
    }

    public function validations(): Collection
    {
        return $this->validations;
    }
}