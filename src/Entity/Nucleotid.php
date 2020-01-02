<?php
/**
 * Database of nucleotids - weigths included
 * Inspired by BioPHP's project biophp.org
 * Created 11 april 2019
 * Last modified 11 april 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Database of nucleotids - weigths included
 *
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class Nucleotid
{
    /**
     * @var     int         Id of the nucleotid (auto-increment)
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var     string      A, T, G or C for example
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $letter;

    /**
     * @var     string      T for A ...
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $complement;

    /**
     * @var     string      DNA or RNA
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $nature;

    /**
     * @var     float       Weight of the nucleotid
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $weight;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLetter(): string
    {
        return $this->letter;
    }

    /**
     * @param string $letter
     */
    public function setLetter(string $letter): void
    {
        $this->letter = $letter;
    }

    /**
     * @return string
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * @param string $complement
     */
    public function setComplement(string $complement): void
    {
        $this->complement = $complement;
    }

    /**
     * @return string
     */
    public function getNature(): string
    {
        return $this->nature;
    }

    /**
     * @param string $nature
     */
    public function setNature(string $nature): void
    {
        $this->nature = $nature;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}