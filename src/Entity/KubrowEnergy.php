<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KubrowEnergyRepository")
 */
class KubrowEnergy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $hexa;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHexa(): ?string
    {
        return $this->hexa;
    }

    public function setHexa(string $hexa): self
    {
        $this->hexa = $hexa;

        return $this;
    }
}
