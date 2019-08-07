<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

trait BaseTrait
{
    /**
     * @var string
     * @Groups({"read", "write", "create"})
     */
    private $traitPropertySuccess;

    /**
     * @var string
     * @Groups({"create"})
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
