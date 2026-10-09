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
use Doctrine\Persistence\ObjectManager;

class LoadTripletData extends Fixture
{
    use AssignsFixedIds;

    public function load(ObjectManager $manager): void
    {
        $iId = 0;
        $triplet = new Triplet();
        $triplet->setTriplet("TTT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TTC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TTA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TTG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TCT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TCC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TCA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TCG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TAT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TAC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TAA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TAG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TGT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TGC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TGA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("TGG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CTT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CTC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CTA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CTG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CCT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CCC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CCA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CCG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CAT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CAC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CAA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CAG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CGT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CGC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CGA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("CGG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ATT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ATC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ATA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ATG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ACT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ACC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ACA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("ACG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AAT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AAC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AAA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AAG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AGT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AGC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AGA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("AGG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GTT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GTC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GTA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GTG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GCT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GCC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GCA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GCG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GAT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GAC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GAA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GAG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GGT");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GGC");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GGA");
        $this->persistWithId($manager, $triplet, ++$iId);

        $triplet = new Triplet();
        $triplet->setTriplet("GGG");
        $this->persistWithId($manager, $triplet, ++$iId);

        $manager->flush();
    }
}