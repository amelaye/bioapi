<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-11
 * Time: 17:14
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
class Nucleotid
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
     * @var string A, T, G or C for example
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $letter;

    /**
     * @var string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $complement;

    /**
     * @var string DNA or RNA
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $nature;

    /**
     * @var float
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $weigth;

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
    public function getWeigth(): float
    {
        return $this->weigth;
    }

    /**
     * @param float $weigth
     */
    public function setWeigth(float $weigth): void
    {
        $this->weigth = $weigth;
    }
}