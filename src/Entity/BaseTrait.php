<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait BaseTrait
{
    /**
     * @var string
     * @Groups({"read", "write", "create"})
     * @ORM\Column(type="string", length=255)
     */
    private $traitPropertySuccess;

    /**
     * @var string
     * @Groups({"create"})
     * @ORM\Column(type="string", length=255)
     */
    private $traitPropertyFail;

    public function getTraitPropertySuccess(): ?string
    {
        return $this->traitPropertySuccess;
    }

    public function setTraitPropertySuccess(string $traitPropertySuccess): self
    {
        $this->traitPropertySuccess = $traitPropertySuccess;

        return $this;
    }

    public function getTraitPropertyFail(): ?string
    {
        return $this->traitPropertyFail;
    }

    public function setTraitPropertyFail(string $traitPropertyFail): self
    {
        $this->traitPropertyFail = $traitPropertyFail;

        return $this;
    }
}
