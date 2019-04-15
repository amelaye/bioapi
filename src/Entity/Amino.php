<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-11
 * Time: 17:09
 */

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class Amino
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $name1Letter;

    /**
     * @var string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $name3Letters;

    /**
     * @var float
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $weight1;

    /**
     * @var float
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $weight2;

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
}