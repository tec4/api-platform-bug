<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

class Base
{
    /**
     * @var string
     * @Groups({"read", "write", "create"})
     */
    private $basePropertySuccess;

    /**
     * @var string
     * @Groups({"create"})
     */
    private $basePropertyFail;

    public function getBasePropertySuccess(): ?string
    {
        return $this->basePropertySuccess;
    }

    public function setBasePropertySuccess(string $basePropertySuccess): self
    {
        $this->basePropertySuccess = $basePropertySuccess;

        return $this;
    }

    public function getBasePropertyFail(): ?string
    {
        return $this->basePropertyFail;
    }

    public function setBasePropertyFail(string $basePropertyFail): self
    {
        $this->basePropertyFail = $basePropertyFail;

        return $this;
    }
}
