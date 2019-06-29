<?php
/**
 * Database of Triplets
 * Inspired by BioPHP's project biophp.org
 * Created 13 april 2019
 * Last modified 13 april 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Database of elements - Triplets ans Species
 *
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get, post"})
 * @ORM\Entity
 */
class TripletSpecie
{
    /**
     * @var     int     The id (auto-increment)
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Standard, Vertebrate mitochondrial ...
     * @var     string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $nature;

    /**
     * @var     array
     *
     * @ORM\Column(type="array")
     * @Assert\NotBlank
     */
    private $triplets;

    /**
     * @var     array
     *
     * @ORM\Column(type="array")
     * @Assert\NotBlank
     */
    private $tripletsGroups;

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
     * @return array
     */
    public function getTriplets(): array
    {
        return $this->triplets;
    }

    /**
     * @param array $triplets
     */
    public function setTriplets(array $triplets): void
    {
        $this->triplets = $triplets;
    }

    /**
     * @return array
     */
    public function getTripletsGroups(): array
    {
        return $this->tripletsGroups;
    }

    /**
     * @param array $tripletsGroups
     */
    public function setTripletsGroups(array $tripletsGroups): void
    {
        $this->tripletsGroups = $tripletsGroups;
    }
}