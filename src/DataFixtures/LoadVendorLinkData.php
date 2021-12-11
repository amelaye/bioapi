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
    public function load(ObjectManager $manager)
    {
        $link = new VendorLink();
        $link->setId("C");
        $link->setName("Minotech Biotechnology");
        $link->setLink("http://www.minotech.gr");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("E");
        $link->setName("Minotech Stratagene");
        $link->setLink("http://www.stratagene.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("F");
        $link->setName("Fermentas AB");
        $link->setLink("http://www.fermentas.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("H");
        $link->setName("American Allied Biochemical, Inc.");
        $link->setLink("http://www.aablabs.com");
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
        $link->setName("Takara Shuzo Co. Ltd.");
        $link->setLink("http://www.takarashuzo.co.jp/english/index.htm");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("M");
        $link->setName("Roche Applied Science");
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
        $link->setId("P");
        $link->setName("Megabase Research Products");
        $link->setLink("http://www.cvienzymes.com");
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
        $link->setId("U");
        $link->setName("Bangalore Genei");
        $link->setLink("http://www.bangaloregenei.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("V");
        $link->setName("MRC-Holland");
        $link->setLink("http://www.mrc-holland.com");
        $manager->persist($link);

        $link = new VendorLink();
        $link->setId("X");
        $link->setName("EURx Ltd.");
        $link->setLink("http://www.eurx.com.pl/index.php?op=catalog&cat=8");
        $manager->persist($link);

        $manager->flush();
    }
}