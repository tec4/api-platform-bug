<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *          "post"={
 *              "normalization_context"={"groups"={"create"}},
 *              "denormalization_context"={"groups"={"create"}},
 *          }
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\ExampleRepository")
 */
class Example extends Base
{
    use BaseTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"read", "write", "create"})
     * @ORM\Column(type="string", length=255)
     */
    private $example;

    /**
     * @Groups({"create"})
     * @ORM\Column(type="string", length=255)
     */
    private $createOnlyProperty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExample(): ?string
    {
        return $this->example;
    }

    public function setExample(string $example): self
    {
        $this->example = $example;

        return $this;
    }

    public function getCreateOnlyProperty(): ?string
    {
        return $this->createOnlyProperty;
    }

    public function setCreateOnlyProperty(string $createOnlyProperty): self
    {
        $this->createOnlyProperty = $createOnlyProperty;

        return $this;
    }
}
