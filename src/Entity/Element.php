<?php
/**
 * Database of elements - weigths included
 * Inspired by BioPHP's project biophp.org
 * Created 11 april 2019
 * Last modified 11 april 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Elements
 * @package App\Entity
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 * @ApiResource
 * @ORM\Entity
 */
class Element
{
    /**
     * @var int The id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string water, carbone, for example
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var float The weight of the nucleotid
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