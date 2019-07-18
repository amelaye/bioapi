<?php
/**
 * Database of elements - PK Values
 * Inspired by BioPHP's project biophp.org
 * Created 17 july 2019
 * Last modified 17 july 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Database of elements - PK Values
 *
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"})
 * @ORM\Entity
 */
class ProteinReduction
{
    /**
     * @var     int       Id of the row
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var     string  Name of the Alphabet (Murphy etc ...)
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $alphabet;

    /**
     * @var     string  Letters of the alphabet
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $letters;

    /**
     * @var     string  Patterns of reduction
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $pattern;

    /**
     * @var     string  Nature of the pattern (Aliphatic, Aromatic ...)
     * @ORM\Column(nullable=true)
     * @Assert\NotBlank
     */
    private $nature;

    /**
     * @var     string  Corresponding letter
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $reduction;

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
    public function getAlphabet(): string
    {
        return $this->alphabet;
    }

    /**
     * @param string $alphabet
     */
    public function setAlphabet(string $alphabet): void
    {
        $this->alphabet = $alphabet;
    }

    /**
     * @return string
     */
    public function getLetters(): string
    {
        return $this->letters;
    }

    /**
     * @param string $letters
     */
    public function setLetters(string $letters): void
    {
        $this->letters = $letters;
    }

    /**
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     */
    public function setPattern(string $pattern): void
    {
        $this->pattern = $pattern;
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
     * @return string
     */
    public function getReduction(): string
    {
        return $this->reduction;
    }

    /**
     * @param string $reduction
     */
    public function setReduction(string $reduction): void
    {
        $this->reduction = $reduction;
    }
}