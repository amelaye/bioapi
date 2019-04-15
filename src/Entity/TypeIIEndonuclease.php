<?php
/**
 * Database of elements - TypeII Endonucleases
 * Inspired by BioPHP's project biophp.org
 * Created 13 april 2019
 * Last modified 13 april 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TypeII Endonucleases
 * @package App\Entity
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 * @ApiResource
 * @ORM\Entity
 */
class TypeIIEndonuclease
{
    /**
     * First endonuclease of the list
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * All endonucleases recognizing the same pattern
     * @var array
     * @ORM\Column(type="array")
     */
    private $samePattern;

    /**
     * Recognition pattern
     * @var string
     * @ORM\Column(type="string")
     */
    private $recognitionPattern;

    /**
     * Recognition pattern for computing
     * @var string
     * @ORM\Column(type="string")
     */
    private $computingPattern;

    /**
     * Length of all recognition pattern
     * @var int
     * @ORM\Column(type="integer")
     */
    private $lengthRecognitionPattern;

    /**
     * Cleavage position in upper strand
     * @var int
     * @ORM\Column(type="integer")
     */
    private $cleavagePosUpper;

    /**
     * Cleavage position in lower strand, relative to previous one
     * @var int
     * @ORM\Column(type="integer")
     */
    private $cleavagePosLower;

    /**
     * Number of non-N bases within recognition pattern
     * @var int
     * @ORM\Column(type="integer")
     */
    private $nbNonNBases;

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
     * @return array
     */
    public function getSamePattern(): array
    {
        return $this->samePattern;
    }

    /**
     * @param array $samePattern
     */
    public function setSamePattern(array $samePattern): void
    {
        $this->samePattern = $samePattern;
    }

    /**
     * @return string
     */
    public function getRecognitionPattern(): string
    {
        return $this->recognitionPattern;
    }

    /**
     * @param string $recognitionPattern
     */
    public function setRecognitionPattern(string $recognitionPattern): void
    {
        $this->recognitionPattern = $recognitionPattern;
    }

    /**
     * @return string
     */
    public function getComputingPattern(): string
    {
        return $this->computingPattern;
    }

    /**
     * @param string $computingPattern
     */
    public function setComputingPattern(string $computingPattern): void
    {
        $this->computingPattern = $computingPattern;
    }

    /**
     * @return int
     */
    public function getLengthRecognitionPattern(): int
    {
        return $this->lengthRecognitionPattern;
    }

    /**
     * @param int $lengthRecognitionPattern
     */
    public function setLengthRecognitionPattern(int $lengthRecognitionPattern): void
    {
        $this->lengthRecognitionPattern = $lengthRecognitionPattern;
    }

    /**
     * @return int
     */
    public function getCleavagePosUpper(): int
    {
        return $this->cleavagePosUpper;
    }

    /**
     * @param int $cleavagePosUpper
     */
    public function setCleavagePosUpper(int $cleavagePosUpper): void
    {
        $this->cleavagePosUpper = $cleavagePosUpper;
    }

    /**
     * @return int
     */
    public function getCleavagePosLower(): int
    {
        return $this->cleavagePosLower;
    }

    /**
     * @param int $cleavagePosLower
     */
    public function setCleavagePosLower(int $cleavagePosLower): void
    {
        $this->cleavagePosLower = $cleavagePosLower;
    }

    /**
     * @return int
     */
    public function getNbNonNBases(): int
    {
        return $this->nbNonNBases;
    }

    /**
     * @param int $nbNonNBases
     */
    public function setNbNonNBases(int $nbNonNBases): void
    {
        $this->nbNonNBases = $nbNonNBases;
    }
}