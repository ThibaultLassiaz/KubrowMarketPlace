<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KubrowRepository")
 */
class Kubrow
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $breed;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $build;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $primary_color;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $secondary_color;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $tertiary_color;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $energy_color;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $pattern;

    /**
    * @ORM\Column(type="boolean", options={"default" : 1})
    */
    private $isSold;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_of_print_available;

    public function getId()
    {
        return $this->id;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(string $breed): self
    {
        $this->breed = $breed;

        return $this;
    }

    public function getBuild(): ?string
    {
        return $this->build;
    }

    public function setBuild(string $build): self
    {
        $this->build = $build;

        return $this;
    }

    public function getPrimaryColor(): ?string
    {
        return $this->primary_color;
    }

    public function setPrimaryColor(string $primary_color): self
    {
        $this->primary_color = $primary_color;

        return $this;
    }

    public function getSecondaryColor(): ?string
    {
        return $this->secondary_color;
    }

    public function setSecondaryColor(string $secondary_color): self
    {
        $this->secondary_color = $secondary_color;

        return $this;
    }

    public function getTertiaryColor(): ?string
    {
        return $this->tertiary_color;
    }

    public function setTertiaryColor(string $tertiary_color): self
    {
        $this->tertiary_color = $tertiary_color;

        return $this;
    }

    public function getEnergyColor(): ?string
    {
        return $this->energy_color;
    }

    public function setEnergyColor(string $energy_color): self
    {
        $this->energy_color = $energy_color;

        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPattern(string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function getNumberOfPrintAvailable(): ?int
    {
        return $this->number_of_print_available;
    }

    public function setNumberOfPrintAvailable(int $number_of_print_available): self
    {
        $this->number_of_print_available = $number_of_print_available;

        return $this;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Is Sold
     *
     * @return mixed
     */
    public function getIsSold()
    {
        return $this->isSold;
    }

    /**
     * Set the value of Is Sold
     *
     * @param mixed isSold
     *
     * @return self
     */
    public function setIsSold($isSold)
    {
        $this->isSold = $isSold;

        return $this;
    }

}
