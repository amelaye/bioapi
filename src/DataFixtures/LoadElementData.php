<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-13
 * Time: 17:27
 */

namespace App\DataFixtures;

use App\Entity\Element;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Fixtures for elements Data
 * Class LoadAminoData
 * @package App\DataFixtures
 * @author Amélie DUVERNET akka Amelaye <amelieonline@gmail.com>
 */
class LoadElementData extends Fixture
{
    use AssignsFixedIds;

    public function load(ObjectManager $manager): void
    {
        $iId = 0;
        $element = new Element();
        $element->setName("carbone");
        $element->setWeight(12.01);
        $this->persistWithId($manager, $element, ++$iId);

        $element = new Element();
        $element->setName("oxygene");
        $element->setWeight(16.00);
        $this->persistWithId($manager, $element, ++$iId);

        $element = new Element();
        $element->setName("azote");
        $element->setWeight(14.01);
        $this->persistWithId($manager, $element, ++$iId);

        $element = new Element();
        $element->setName("hydrogene");
        $element->setWeight(1.01);
        $this->persistWithId($manager, $element, ++$iId);

        $element = new Element();
        $element->setName("phosphore");
        $element->setWeight(30.97);
        $this->persistWithId($manager, $element, ++$iId);

        $element = new Element();
        $element->setName("water");
        $element->setWeight(18.0153);
        $this->persistWithId($manager, $element, ++$iId);

        $manager->flush();
    }
}