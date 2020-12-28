<?php

namespace App\Entity;

use App\Repository\NWN2CharRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NWN2CharRepository::class)
 */
class NWN2Char
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $race;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $alignment;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $startclass;

    /**
     * @ORM\Column(type="integer")
     */
    private $lvlclass1;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $class2;

    /**
     * @ORM\Column(type="integer")
     */
    private $lvlclass2;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $class3;

    /**
     * @ORM\Column(type="integer")
     */
    private $lvlclass3;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $class4;

    /**
     * @ORM\Column(type="integer")
     */
    private $lvlclass4;

    /**
     * @ORM\Column(type="integer")
     */
    private $lvltotal;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $layer;

    public function getId(): ?int
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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    public function setAlignment(string $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }

    public function getStartclass(): ?string
    {
        return $this->startclass;
    }

    public function setStartclass(string $startclass): self
    {
        $this->startclass = $startclass;

        return $this;
    }

    public function getLvlclass1(): ?int
    {
        return $this->lvlclass1;
    }

    public function setLvlclass1(int $lvlclass1): self
    {
        $this->lvlclass1 = $lvlclass1;

        return $this;
    }

    public function getClass2(): ?string
    {
        return $this->class2;
    }

    public function setClass2(string $class2): self
    {
        $this->class2 = $class2;

        return $this;
    }

    public function getLvlclass2(): ?int
    {
        return $this->lvlclass2;
    }

    public function setLvlclass2(int $lvlclass2): self
    {
        $this->lvlclass2 = $lvlclass2;

        return $this;
    }

    public function getClass3(): ?string
    {
        return $this->class3;
    }

    public function setClass3(string $class3): self
    {
        $this->class3 = $class3;

        return $this;
    }

    public function getLvlclass3(): ?int
    {
        return $this->lvlclass3;
    }

    public function setLvlclass3(int $lvlclass3): self
    {
        $this->lvlclass3 = $lvlclass3;

        return $this;
    }

    public function getClass4(): ?string
    {
        return $this->class4;
    }

    public function setClass4(string $class4): self
    {
        $this->class4 = $class4;

        return $this;
    }

    public function getLvlclass4(): ?int
    {
        return $this->lvlclass4;
    }

    public function setLvlclass4(int $lvlclass4): self
    {
        $this->lvlclass4 = $lvlclass4;

        return $this;
    }

    public function getLvltotal(): ?int
    {
        return $this->lvltotal;
    }

    public function setLvltotal(int $lvltotal): self
    {
        $this->lvltotal = $lvltotal;

        return $this;
    }

    public function getLayer(): ?string
    {
        return $this->layer;
    }

    public function setLayer(string $layer): self
    {
        $this->layer = $layer;

        return $this;
    }
}
