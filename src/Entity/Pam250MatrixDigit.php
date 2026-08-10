<?php
/**
 * PAM 250 Matrix
 * Inspired by BioPHP's project biophp.org
 * Created 21 july 2019
 * Last modified 7 august 2026
 */
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PAM 250 Matrix
 */
#[ApiResource(operations: [new GetCollection(), new Get()])]
#[ORM\Entity]
#[ORM\Table(name: 'pam250matrix_digit')]
class Pam250MatrixDigit
{
    /**
     * @var     string         Index
     */
    #[ORM\Id]
    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    private $id;

    /**
     * @var     int         Value
     */
    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    private $value;

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
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}
