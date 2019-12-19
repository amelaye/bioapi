<?php
/**
 * Database of elements - Amino acids
 * Inspired by BioPHP's project biophp.org
 * Created 13 april 2019
 * Last modified 13 april 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Database of elements - Amino acids
 *
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"})
 * @ORM\Entity
 */
class Amino
{
    /**
     * @var     string         Id of the amino acid (auto-increment)
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var     string      Name of the amino
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var     string      Name in 1 letter (A, L, S ...)
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name1Letter;

    /**
     * @var string          Name in 3 letters (Ser, Leu ...)
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name3Letters;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", precision=5, scale=2)
     * @Assert\NotBlank
     */
    private $weight1;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", precision=5, scale=2)
     * @Assert\NotBlank
     */
    private $weight2;

    /**
     * @var float
     *
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $residueMolWeight;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName1Letter(): string
    {
        return $this->name1Letter;
    }

    /**
     * @param string $name1Letter
     */
    public function setName1Letter(string $name1Letter): void
    {
        $this->name1Letter = $name1Letter;
    }

    /**
     * @return string
     */
    public function getName3Letters(): string
    {
        return $this->name3Letters;
    }

    /**
     * @param string $name3Letters
     */
    public function setName3Letters(string $name3Letters): void
    {
        $this->name3Letters = $name3Letters;
    }

    /**
     * @return float
     */
    public function getWeight1(): float
    {
        return $this->weight1;
    }

    /**
     * @param float $weight1
     */
    public function setWeight1(float $weight1): void
    {
        $this->weight1 = $weight1;
    }

    /**
     * @return float
     */
    public function getWeight2(): float
    {
        return $this->weight2;
    }

    /**
     * @param float $weight2
     */
    public function setWeight2(float $weight2): void
    {
        $this->weight2 = $weight2;
    }

    /**
     * @return float
     */
    public function getResidueMolWeight(): ?float
    {
        return $this->residueMolWeight;
    }

    /**
     * @param float $residueMolWeight
     */
    public function setResidueMolWeight(float $residueMolWeight): void
    {
        $this->residueMolWeight = $residueMolWeight;
    }
}