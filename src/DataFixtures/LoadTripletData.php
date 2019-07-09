<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-16
 * Time: 14:55
 */

namespace App\DataFixtures;

use App\Entity\Triplet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTripletData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $triplet = new Triplet();
        $triplet->setTriplet("TTT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TTC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TTA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TTG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TCT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TCC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TCA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TCG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TAT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TAC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TAA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TAG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TGT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TGC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TGA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("TGG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CTT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CTC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CTA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CTG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CCT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CCC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CCA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CCG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CAT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CAC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CAA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CAG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CGT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CGC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CGA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("CGG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ATT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ATC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ATA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ATG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ACT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ACC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ACA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("ACG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AAT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AAC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AAA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AAG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AGT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AGC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AGA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("AGG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GTT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GTC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GTA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GTG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GCT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GCC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GCA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GCG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GAT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GAC");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GAA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GAG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GGT");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GCG");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GGA");
        $manager->persist($triplet);

        $triplet = new Triplet();
        $triplet->setTriplet("GGG");
        $manager->persist($triplet);

        $manager->flush();
    }
}