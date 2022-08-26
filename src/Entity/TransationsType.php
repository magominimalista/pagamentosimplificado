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
#[Table('transations_type')]

class TransationsType
{
    #[Id] 
    #[Column, GeneratedValue]
    private int $id;

    #[Column(length: 10)]
    private string $type;

    #[OneToOne (
        mappedBy: "transationsType",
        targetEntity: TransationsType::class,
    )]
    private Collection $transationsType;

    public function __construct() {
        $this->transationsType = new  Collection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): TransationsType
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): TransationsType
    {
        $this->type = $type;

        return $this;
    }

    public function TransationsType(): Collection
    {
        return $this->transationsType;
    }
}