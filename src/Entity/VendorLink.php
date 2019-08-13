<?php
/**
 * Database of elements - TypeIIs Endonucleolases
 * Inspired by BioPHP's project biophp.org
 * Created 16 april 2019
 * Last modified 16 april 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Enzymes - Vendors Links
 * @package App\Entity
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 * @ApiResource(
 *     collectionOperations={"get","post"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class VendorLink
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $link;

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
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }
}