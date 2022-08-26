<?php

declare(strict_types = 1);

namespace Src\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('account')]

class Account
{
    #[Id] 
    #[Column, GeneratedValue]
    private int $id;

    #[OneToOne (
        inversedBy: "account",
        targetEntity: Users::class
    )]
    public readonly Users $users;


    #[Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private float $balance;

    #[Column(name: 'updated_at')]
    private \DateTime $updateddAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Account
    {
        $this->id = $id;

        return $this;
    }

    public function setUsers(Users $users): void
    {
        $this->users = $users;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): Account
    {
        $this->balance = $balance;

        return $this;
    }

    public function getUpdateddAt(): \DateTime
    {
        return $this->updateddAt;
    }

    public function setUpdateddAt(\DateTime $updateddAt): Account
    {
        $this->updateddAt = $updateddAt;

        return $this;
    }
}