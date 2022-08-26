<?php

declare(strict_types = 1);

namespace Src\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('transations')]

class Transations
{
    #[Id]
    #[Column(length: 100)]
    private string $id;

    #[ManyToOne (
        inversedBy: "transations",
        targetEntity: Users::class
    )]
    public readonly Users $users;

    #[OneToOne (
        inversedBy: "transations",
        targetEntity: TransationsType::class
    )]
    public readonly TransationsType $transationsType;

    #[Column]
    private int $payee;

    #[Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private float $value;

    #[Column(name: 'created_at')]
    private \DateTime $createdAt;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Transations
    {
        $this->id = $id;

        return $this;
    }

    public function setUsers(Transations $users): void
    {
        $this->users = $users;
    }

    public function setTransitionsType(Transations $transationsType): void
    {
        $this->transationsType = $transationsType;
    }

    public function getPayee(): int
    {
        return $this->payee;
    }

    public function setPayee(int $payee): Transations
    {
        $this->payee = $payee;

        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): Transations
    {
        $this->value = $value;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Transations
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}