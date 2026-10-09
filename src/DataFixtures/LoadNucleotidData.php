<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-13
 * Time: 17:59
 */

namespace App\DataFixtures;

use App\Entity\Nucleotid;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoadNucleotidData extends Fixture
{
    use AssignsFixedIds;

    public function load(ObjectManager $manager): void
    {
        $iId = 0;
        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("A");
        $nucleotid->setComplement("T");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeight(313.2065);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("T");
        $nucleotid->setComplement("A");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeight(304.1932);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("G");
        $nucleotid->setComplement("C");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeight(329.2059);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("C");
        $nucleotid->setComplement("G");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeight(289.1818);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("A");
        $nucleotid->setComplement("U");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeight(329.2059);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("U");
        $nucleotid->setComplement("A");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeight(306.166);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("G");
        $nucleotid->setComplement("C");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeight(345.2053);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("C");
        $nucleotid->setComplement("G");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeight(305.1812);
        $this->persistWithId($manager, $nucleotid, ++$iId);

        $manager->flush();
    }
}