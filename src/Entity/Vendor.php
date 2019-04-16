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
 * Enzymes - Vendors
 * @package App\Entity
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 * @ApiResource(
 *     collectionOperations={"get","post"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class Vendor
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
    private $vendor;

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
    public function getVendor(): string
    {
        return $this->vendor;
    }

    /**
     * @param string $vendor
     */
    public function setVendor(string $vendor): void
    {
        $this->vendor = $vendor;
    }


}