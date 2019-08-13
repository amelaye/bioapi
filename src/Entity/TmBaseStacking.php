<?php
/**
 * Database of Temperatures
 * Inspired by BioPHP's project biophp.org
 * Created 24 june 2019
 * Last modified 24 june 2019
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Database of temperatures of di-nucleotids
 * From table at http://www.ncbi.nlm.nih.gov/pmc/articles/PMC19045/table/T2/ (SantaLucia, 1998)
 *
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class TmBaseStacking
{
    /**
     * @var     string         Id of the nucleotid (auto-increment)
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var     float      Enthalpy Temperature
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $temperatureEnthalpy;

    /**
     * @var     float      Enthropy Temperature
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $temperatureEnthropy;

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
     * @return float
     */
    public function getTemperatureEnthalpy(): float
    {
        return $this->temperatureEnthalpy;
    }

    /**
     * @param float $temperatureEnthalpy
     */
    public function setTemperatureEnthalpy(float $temperatureEnthalpy): void
    {
        $this->temperatureEnthalpy = $temperatureEnthalpy;
    }

    /**
     * @return float
     */
    public function getTemperatureEnthropy(): float
    {
        return $this->temperatureEnthropy;
    }

    /**
     * @param float $temperatureEnthropy
     */
    public function setTemperatureEnthropy(float $temperatureEnthropy): void
    {
        $this->temperatureEnthropy = $temperatureEnthropy;
    }
}