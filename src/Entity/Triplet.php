<?php
/**
 * Database of Triplets
 * Inspired by BioPHP's project biophp.org
 * Created 9 july 2019
 * Last modified 9 july 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Database of Triplets
 *
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class Triplet
{
    /**
     * @var     int     The id (auto-increment)
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * TTT, TTC ...
     * @var     string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $triplet;


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
    public function getTriplet(): string
    {
        return $this->triplet;
    }

    /**
     * @param string $triplet
     */
    public function setTriplet(string $triplet): void
    {
        $this->triplet = $triplet;
    }
}