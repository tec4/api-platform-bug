<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\MappedSuperclass()
 */
class Base
{
    /**
     * @var string
     * @Groups({"read", "write", "create"})
     * @ORM\Column(type="string", length=255)
     */
    private $basePropertySuccess;

    /**
     * @var string
     * @Groups({"create"})
     * @ORM\Column(type="string", length=255)
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
