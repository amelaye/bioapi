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
    public function load(ObjectManager $manager)
    {
        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("A");
        $nucleotid->setComplement("T");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeigth(313.245);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("T");
        $nucleotid->setComplement("A");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeigth(304.225);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("G");
        $nucleotid->setComplement("C");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeigth(329.245);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("C");
        $nucleotid->setComplement("G");
        $nucleotid->setNature("DNA");
        $nucleotid->setWeigth(289.215);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("A");
        $nucleotid->setComplement("U");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeigth(329.245);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("U");
        $nucleotid->setComplement("A");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeigth(306.195);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("G");
        $nucleotid->setComplement("C");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeigth(345.245);
        $manager->persist($nucleotid);

        $nucleotid = new Nucleotid();
        $nucleotid->setLetter("C");
        $nucleotid->setComplement("G");
        $nucleotid->setNature("RNA");
        $nucleotid->setWeigth(305.215);
        $manager->persist($nucleotid);

        $manager->flush();
    }
}