<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-06-24
 * Time: 14:55
 */

namespace App\DataFixtures;

use App\Entity\TmBaseStacking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TmBaseStackingData extends fixture
{
    public function load(ObjectManager $manager)
    {
        $temperatures = array(
            array(
                "id" => "AA",
                "temperature_enthalpy" => -7.9,
                "temperature_enthropy" => -22.2,
            ),
            array(
                "id" => "AC",
                "temperature_enthalpy" => -8.4,
                "temperature_enthropy" => -22.4,
            ),
            array(
                "id" => "AG",
                "temperature_enthalpy" => -7.8,
                "temperature_enthropy" => -21.0,
            ),
            array(
                "id" => "AT",
                "temperature_enthalpy" => -7.2,
                "temperature_enthropy" => -20.4,
            ),
            array(
                "id" => "CA",
                "temperature_enthalpy" => -8.5,
                "temperature_enthropy" => -22.7,
            ),
            array(
                "id" => "CC",
                "temperature_enthalpy" => -8.0,
                "temperature_enthropy" => -19.9,
            ),
            array(
                "id" => "CG",
                "temperature_enthalpy" => -10.6,
                "temperature_enthropy" => -27.2,
            ),
            array(
                "id" => "CT",
                "temperature_enthalpy" => -7.8,
                "temperature_enthropy" => -21.0,
            ),
            array(
                "id" => "GA",
                "temperature_enthalpy" => -8.2,
                "temperature_enthropy" => -22.2,
            ),
            array(
                "id" => "GC",
                "temperature_enthalpy" => -9.8,
                "temperature_enthropy" => -24.4,
            ),
            array(
                "id" => "GG",
                "temperature_enthalpy" => -8.0,
                "temperature_enthropy" => -19.9,
            ),
            array(
                "id" => "GT",
                "temperature_enthalpy" => -8.4,
                "temperature_enthropy" => -22.4,
            ),
            array(
                "id" => "TA",
                "temperature_enthalpy" => -7.2,
                "temperature_enthropy" => -21.3,
            ),
            array(
                "id" => "TC",
                "temperature_enthalpy" => -8.2,
                "temperature_enthropy" => -22.2,
            ),
            array(
                "id" => "TG",
                "temperature_enthalpy" => -8.5,
                "temperature_enthropy" => -22.7,
            ),
            array(
                "id" => "TT",
                "temperature_enthalpy" => -7.9,
                "temperature_enthropy" => -22.2,
            ),
        );

        foreach($temperatures as $key => $data) {
            $temperature = new TmBaseStacking();
            $temperature->setId($data["id"]);
            $temperature->setTemperatureEnthalpy($data["temperature_enthalpy"]);
            $temperature->setTemperatureEnthropy($data["temperature_enthropy"]);
            $manager->persist($temperature);
        }

        $manager->flush();
    }

}