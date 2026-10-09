<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-07-21
 * Time: 14:20
 */

namespace App\DataFixtures;

use App\Entity\VendorLink;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoadVendorLinkData extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $link = new VendorLink();
        $link->setId("B");
        $link->setName("Thermo Fisher Scientific");
        $link->setLink("https://www.thermofisher.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("E");
        $link->setName("Agilent Technologies");
        $link->setLink("https://www.agilent.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("I");
        $link->setName("SibEnzyme Ltd.");
        $link->setLink("http://www.sibenzyme.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("J");
        $link->setName("Nippon Gene Co., Ltd.");
        $link->setLink("http://www.nippongene.jp");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("K");
        $link->setName("Takara Bio Inc.");
        $link->setLink("https://www.takarabio.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("M");
        $link->setName("Roche Custom Biotech");
        $link->setLink("http://www.roche.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("N");
        $link->setName("New England Biolabs");
        $link->setLink("http://www.neb.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("O");
        $link->setName("Toyobo Biochemicals");
        $link->setLink("http://www.toyobo.co.jp/e/");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("Q");
        $link->setName("CHIMERx");
        $link->setLink("http://www.CHIMERx.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("R");
        $link->setName("Promega Corporation");
        $link->setLink("http://www.promega.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("S");
        $link->setName("Sigma Chemical Corporation");
        $link->setLink("http://www.sigmaaldrich.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("V");
        $link->setName("Vivantis Technologies");
        $link->setLink("https://vivantechnologies.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("X");
        $link->setName("EURx Ltd.");
        $link->setLink("http://www.eurx.com.pl/index.php?op=catalog&cat=8");
        $manager->persist($link);

        $manager->flush();
    }
}