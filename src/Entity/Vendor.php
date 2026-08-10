<?php
/**
 * Database of elements - TypeIIs Endonucleolases
 * Inspired by BioPHP's project biophp.org
 * Created 16 april 2019
 * Last modified 7 august 2026
 */
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Enzymes - Vendors
 * @package App\Entity
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 */
#[ApiResource(operations: [new GetCollection(), new Get()])]
#[ORM\Entity]
class Vendor
{
    /**
     * @var string
     */
    #[ORM\Id]
    #[ORM\Column(type: 'string')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string')]
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
