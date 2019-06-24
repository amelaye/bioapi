<?php
/**
 * Database of elements - TypeIIs Endonucleolases
 * Inspired by BioPHP's project biophp.org
 * Created 15 april 2019
 * Last modified 15 april 2019
 * RIP Notre Dame de Paris is burning </3
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Enzymes - TypeIIs Endonucleolases
 * @package App\Entity
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 * @ApiResource(
 *     collectionOperations={"get","post"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class TypeIIEndonucleolase
{
    /**
     * @var     string      First endonucleolase of the list
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var     array       All endonucleolases recognizing the same pattern
     * @ORM\Column(type="array")
     */
    private $samePattern;

    /**
     * @var     string      Recognition pattern
     * @ORM\Column(type="string")
     */
    private $recognitionPattern;

    /**
     * @var     string      Recognition pattern for computing
     * @ORM\Column(type="string")
     */
    private $computingPattern;

    /**
     * @var     int         Length of all recognition pattern
     * @ORM\Column(type="integer")
     */
    private $lengthRecognitionPattern;

    /**
     * @var     int         Cleavage position in upper strand
     * @ORM\Column(type="integer")
     */
    private $cleavagePosUpper;

    /**
     * @var     int         Cleavage position in lower strand, relative to previous one
     * @ORM\Column(type="integer")
     */
    private $cleavagePosLower;

    /**
     * @var     int         Number of non-N bases within recognition pattern
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