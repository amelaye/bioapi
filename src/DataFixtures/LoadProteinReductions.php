<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-16
 * Time: 14:55
 */

namespace App\DataFixtures;

use App\Entity\ProteinReduction;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProteinReductions extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**
         * 2
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet(2);
        $reduction->setLetters("PH");
        $reduction->setPattern("/A|G|T|S|N|Q|D|E|H|R|K|P/");
        $reduction->setNature("Hydrophilic");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(2);
        $reduction->setLetters("PH");
        $reduction->setPattern("/C|M|F|I|L|V|W|Y/");
        $reduction->setNature("Hydrophobic");
        $reduction->setReduction("h");
        $manager->persist($reduction);


        /**
         * 5
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet(5);
        $reduction->setLetters("ARCTD");
        $reduction->setPattern("/I|V|L/");
        $reduction->setNature("Aliphatic");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(5);
        $reduction->setLetters("ARCTD");
        $reduction->setPattern("/F|Y|W|H/");
        $reduction->setNature("Aromatic");
        $reduction->setReduction("r");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(5);
        $reduction->setLetters("ARCTD");
        $reduction->setPattern("/K|R|D|E/");
        $reduction->setNature("Charged");
        $reduction->setReduction("c");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(5);
        $reduction->setLetters("ARCTD");
        $reduction->setPattern("/G|A|C|S/");
        $reduction->setNature("Tiny");
        $reduction->setReduction("t");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(5);
        $reduction->setLetters("ARCTD");
        $reduction->setPattern("/T|M|Q|N|P/");
        $reduction->setNature("Diverse");
        $reduction->setReduction("d");
        $manager->persist($reduction);

        /**
         * 6
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet(6);
        $reduction->setLetters("ARPNTD");
        $reduction->setPattern("/I|V|L/");
        $reduction->setNature("Aliphatic");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(6);
        $reduction->setLetters("ARPNTD");
        $reduction->setPattern("/F|Y|W|H/");
        $reduction->setNature("Aromatic");
        $reduction->setReduction("r");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(6);
        $reduction->setLetters("ARPNTD");
        $reduction->setPattern("/K|R/");
        $reduction->setNature("Pos. charged");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(6);
        $reduction->setLetters("ARPNTD");
        $reduction->setPattern("/D|E/");
        $reduction->setNature("Neg. charged");
        $reduction->setReduction("n");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(6);
        $reduction->setLetters("ARPNTD");
        $reduction->setPattern("/G|A|C|S/");
        $reduction->setNature("Tiny");
        $reduction->setReduction("t");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet(6);
        $reduction->setLetters("ARPNTD");
        $reduction->setPattern("/T|M|Q|N|P/");
        $reduction->setNature("Diverse");
        $reduction->setReduction("d");
        $manager->persist($reduction);

        /**
         * 3IMG
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("3IMG");
        $reduction->setLetters("PNH");
        $reduction->setPattern("/D|N|E|Q|K|R/");
        $reduction->setNature("Hydrophilic");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("3IMG");
        $reduction->setLetters("PNH");
        $reduction->setPattern("/G|T|S|Y|P|M/");
        $reduction->setNature("Neutral");
        $reduction->setReduction("n");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("3IMG");
        $reduction->setLetters("PNH");
        $reduction->setPattern("/I|V|L|F|C|M|A|W/");
        $reduction->setNature("Hydrophobic");
        $reduction->setReduction("h");
        $manager->persist($reduction);

        /**
         * 5IMG
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("5IMG");
        $reduction->setLetters("GCEMF");
        $reduction->setPattern("/G|A|S/");
        $reduction->setNature("60-90");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("5IMG");
        $reduction->setLetters("GCEMF");
        $reduction->setPattern("/C|D|P|N|T/");
        $reduction->setNature("108-117");
        $reduction->setReduction("c");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("5IMG");
        $reduction->setLetters("GCEMF");
        $reduction->setPattern("/E|V|Q|H/");
        $reduction->setNature("138-154");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("5IMG");
        $reduction->setLetters("GCEMF");
        $reduction->setPattern("/M|I|L|K|R/");
        $reduction->setNature("162-174");
        $reduction->setReduction("m");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("5IMG");
        $reduction->setLetters("GCEMF");
        $reduction->setPattern("/F|Y|W/");
        $reduction->setNature("189-228");
        $reduction->setReduction("f");
        $manager->persist($reduction);


        /**
         * 11IMG
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/A|V|I|L/");
        $reduction->setNature("Aliphatic");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/F/");
        $reduction->setNature("Phenylalanine");
        $reduction->setReduction("f");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/C|M/");
        $reduction->setNature("Sulfur");
        $reduction->setReduction("c");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/G/");
        $reduction->setNature("Glycine");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/S|T/");
        $reduction->setNature("Hydroxyl");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/W/");
        $reduction->setNature("Tryptophan");
        $reduction->setReduction("w");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/Y/");
        $reduction->setNature("Tyrosine");
        $reduction->setReduction("y");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/P/");
        $reduction->setNature("Proline");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/D|E/");
        $reduction->setNature("Acidic");
        $reduction->setReduction("d");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/N|Q/");
        $reduction->setNature("Amide");
        $reduction->setReduction("n");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("11IMG");
        $reduction->setLetters("AFCGSWYPDNH");
        $reduction->setPattern("/H|K|R/");
        $reduction->setNature("Basic");
        $reduction->setReduction("h");
        $manager->persist($reduction);


        /**
         * Murphy15
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/L|V|I|M/");
        $reduction->setNature("Large hydrophobic");
        $reduction->setReduction("l");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/C/");
        $reduction->setReduction("c");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/A/");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/G/");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/S/");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/T/");
        $reduction->setReduction("t");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/P/");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/F|Y/");
        $reduction->setNature("Hydrophobic/aromatic sidechains");
        $reduction->setReduction("f");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/W/");
        $reduction->setReduction("w");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/E/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/D/");
        $reduction->setReduction("d");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/N/");
        $reduction->setReduction("n");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/Q/");
        $reduction->setReduction("q");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/K|R/");
        $reduction->setNature("Long-chain positively charged");
        $reduction->setReduction("k");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy15");
        $reduction->setLetters("LCAGSTPFWEDNQKH");
        $reduction->setPattern("/H/");
        $reduction->setReduction("h");
        $manager->persist($reduction);

        /**
         * Murphy10
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/L|V|I|M/");
        $reduction->setNature("Large hydrophobic");
        $reduction->setReduction("l");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/C/");
        $reduction->setReduction("c");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/A/");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/G/");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/S|T/");
        $reduction->setNature("Polar");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/P/");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/F|Y|W/");
        $reduction->setNature("Hydrophobic/aromatic sidechains");
        $reduction->setReduction("f");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/E|D|N|Q/");
        $reduction->setNature("Charged / polar");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/K|R/");
        $reduction->setNature("Long-chain positively charged");
        $reduction->setReduction("k");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy10");
        $reduction->setLetters("LCAGSPFEKH");
        $reduction->setPattern("/H/");
        $reduction->setReduction("h");
        $manager->persist($reduction);

        /**
         * Murphy 4
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy4");
        $reduction->setLetters("LAFE");
        $reduction->setPattern("/L|V|I|M|C/");
        $reduction->setNature("Hydrophobic");
        $reduction->setReduction("l");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy4");
        $reduction->setLetters("LAFE");
        $reduction->setPattern("/A|G|S|T|P/");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy4");
        $reduction->setLetters("LAFE");
        $reduction->setPattern("/F|Y|W/");
        $reduction->setNature("Hydrophobic/aromatic sidechains");
        $reduction->setReduction("f");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy4");
        $reduction->setLetters("LAFE");
        $reduction->setPattern("/E|D|N|Q|K|R|H/");
        $reduction->setReduction("e");
        $manager->persist($reduction);


        /**
         * Murphy 2
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy2");
        $reduction->setLetters("PE");
        $reduction->setPattern("/L|V|I|M|C|A|G|S|T|P|F|Y|W/");
        $reduction->setNature("Hydrophobic");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Murphy2");
        $reduction->setLetters("PE");
        $reduction->setPattern("/E|D|N|Q|K|R|H/");
        $reduction->setNature("Hydrophilic");
        $reduction->setReduction("e");
        $manager->persist($reduction);


        /**
         * Wang 5
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5");
        $reduction->setLetters("IAGEK");
        $reduction->setPattern("/C|M|F|I|L|V|W|Y/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5");
        $reduction->setLetters("IAGEK");
        $reduction->setPattern("/A|T|H/");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5");
        $reduction->setLetters("IAGEK");
        $reduction->setPattern("/G|P/");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5");
        $reduction->setLetters("IAGEK");
        $reduction->setPattern("/D|E/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5");
        $reduction->setLetters("IAGEK");
        $reduction->setPattern("/S|N|Q|R|K/");
        $reduction->setReduction("k");
        $manager->persist($reduction);

        /**
         * WANG 5V
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5v");
        $reduction->setLetters("ILAEK");
        $reduction->setPattern("/C|M|F|I/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5v");
        $reduction->setLetters("ILAEK");
        $reduction->setPattern("/L|V|W|Y/");
        $reduction->setReduction("l");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5v");
        $reduction->setLetters("ILAEK");
        $reduction->setPattern("/A|T|G|S/");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5v");
        $reduction->setLetters("ILAEK");
        $reduction->setPattern("/N|Q|D|E/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang5v");
        $reduction->setLetters("ILAEK");
        $reduction->setPattern("/H|P|R|K/");
        $reduction->setReduction("k");
        $manager->persist($reduction);

        /**
         * Wang3
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang3");
        $reduction->setLetters("IAE");
        $reduction->setPattern("/C|M|F|I|L|V|W|Y/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang3");
        $reduction->setLetters("IAE");
        $reduction->setPattern("/A|T|H|G|P|R/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang3");
        $reduction->setLetters("IAE");
        $reduction->setPattern("/D|E|S|N|Q|K/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        /**
         * Wang 2
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang2");
        $reduction->setLetters("IA");
        $reduction->setPattern("/C|M|F|I|L|V|W|Y/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Wang2");
        $reduction->setLetters("IA");
        $reduction->setPattern("/A|T|H|G|P|R|D|E|S|N|Q|K/");
        $reduction->setReduction("a");
        $manager->persist($reduction);

        /**
         * Li10
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/C/");
        $reduction->setReduction("c");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/F|Y|W/");
        $reduction->setReduction("y");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/M|L/");
        $reduction->setReduction("l");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/I|V/");
        $reduction->setReduction("v");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/G/");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/P/");
        $reduction->setReduction("p");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/A|T|S/");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/N|H/");
        $reduction->setReduction("n");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/Q|E|D/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li10");
        $reduction->setLetters("CYLVGPSNEK");
        $reduction->setPattern("/R|K/");
        $reduction->setReduction("k");
        $manager->persist($reduction);

        /**
         * Li5
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li5");
        $reduction->setLetters("YIGSE");
        $reduction->setPattern("/C|F|Y|W/");
        $reduction->setReduction("y");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li5");
        $reduction->setLetters("YIGSE");
        $reduction->setPattern("/M|L|I|V/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li5");
        $reduction->setLetters("YIGSE");
        $reduction->setPattern("/G/");
        $reduction->setReduction("g");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li5");
        $reduction->setLetters("YIGSE");
        $reduction->setPattern("/P|A|T|S/");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li5");
        $reduction->setLetters("YIGSE");
        $reduction->setPattern("/N|H|Q|E|D|R|K/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        /**
         * Li4
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li4");
        $reduction->setLetters("YISE");
        $reduction->setPattern("/C|F|Y|W/");
        $reduction->setReduction("y");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li4");
        $reduction->setLetters("YISE");
        $reduction->setPattern("/M|L|I|V/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li4");
        $reduction->setLetters("YISE");
        $reduction->setPattern("/G|P|A|T|S/");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li4");
        $reduction->setLetters("YISE");
        $reduction->setPattern("/N|H|Q|E|D|R|K/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        /**
         * Li3
         */
        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li3");
        $reduction->setLetters("ISE");
        $reduction->setPattern("/C|F|Y|W|M|L|I|V/");
        $reduction->setReduction("i");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li3");
        $reduction->setLetters("ISE");
        $reduction->setPattern("/G|P|A|T|S/");
        $reduction->setReduction("s");
        $manager->persist($reduction);

        $reduction = new ProteinReduction();
        $reduction->setAlphabet("Li3");
        $reduction->setLetters("ISE");
        $reduction->setPattern("/N|H|Q|E|D|R|K/");
        $reduction->setReduction("e");
        $manager->persist($reduction);

        $manager->flush();
    }
}