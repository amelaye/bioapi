<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-13
 * Time: 18:06
 */

namespace App\DataFixtures;

use App\Entity\TypeIIbEndonuclease;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoadTypeIIbEndonucleaseData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("AjuI#");
        $endonuclease->setSamePattern(["AjuI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNGAANNNNNNNTTGGNNNNNN_NNNNN_'");
        $endonuclease->setComputingPattern("(............GAA.......TTGG...........|...........CCAA.......TTC............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("AlfI#");
        $endonuclease->setSamePattern(["AjuI"]);
        $endonuclease->setRecognitionPattern("_NN'NNNNNNNNNNCGANNNNNNTGCNNNNNNNNNN_NN'");
        $endonuclease->setComputingPattern("(............CGA......TGC............|............GCA......TCG............)");
        $endonuclease->setLengthRecognitionPattern(36);
        $endonuclease->setCleavagePosUpper(2);
        $endonuclease->setCleavagePosLower(-2);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("AloI#");
        $endonuclease->setSamePattern(["AloI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNGAACNNNNNNTCCNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(............GAAC......TCC............|............GGA......GTTC............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("BaeI#");
        $endonuclease->setSamePattern(["BaeI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNNNNACNNNNGTAYCNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(...............AC....GTACC............|...............AC....GTATC............|............GATAC....GT...............|............GGTAC....GT...............)");
        $endonuclease->setLengthRecognitionPattern(38);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("BarI#");
        $endonuclease->setSamePattern(["BarI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNGAAGNNNNNNTACNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(............GAAG......TAC............|............GTA......CTTC............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("BcgI#");
        $endonuclease->setSamePattern(["BcgI"]);
        $endonuclease->setRecognitionPattern("_NN'NNNNNNNNNNCGANNNNNNTGCNNNNNNNNNN_NN'");
        $endonuclease->setComputingPattern("(............CGA......TGC............|............GCA......TCG............)");
        $endonuclease->setLengthRecognitionPattern(36);
        $endonuclease->setCleavagePosUpper(2);
        $endonuclease->setCleavagePosLower(-2);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("BdaI#");
        $endonuclease->setSamePattern(["BdaI"]);
        $endonuclease->setRecognitionPattern("_NN'NNNNNNNNNNTGANNNNNNTCANNNNNNNNNN_NN'");
        $endonuclease->setComputingPattern("(............TGA......TCA............)");
        $endonuclease->setLengthRecognitionPattern(36);
        $endonuclease->setCleavagePosUpper(2);
        $endonuclease->setCleavagePosLower(-2);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("BplI#");
        $endonuclease->setSamePattern(["BplI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNNGAGNNNNNCTCNNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(.............GAG.....CTC.............|.............GAG.....CTC.............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("BsaXI#");
        $endonuclease->setSamePattern(["BsaXI"]);
        $endonuclease->setRecognitionPattern("_NNN'NNNNNNNNNACNNNNNCTCCNNNNNNN_NNN'");
        $endonuclease->setComputingPattern("(............AC.....CTCC..........|..........GGAG.....GT............)");
        $endonuclease->setLengthRecognitionPattern(33);
        $endonuclease->setCleavagePosUpper(3);
        $endonuclease->setCleavagePosLower(-3);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("CspCI#");
        $endonuclease->setSamePattern(["CspCI"]);
        $endonuclease->setRecognitionPattern("_NN'NNNNNNNNNNNCAANNNNNGTGGNNNNNNNNNN_NN'");
        $endonuclease->setComputingPattern("(.............CAA.....GTGG............|............GCA.....TCG.............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(2);
        $endonuclease->setCleavagePosLower(-2);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("FalI#");
        $endonuclease->setSamePattern(["FalI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNNAAGNNNNNCTTNNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(.............AAG.....CTT.............|.............AAG.....CTT.............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("Hin4I#");
        $endonuclease->setSamePattern(["Hin4I"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNNGAYNNNNNVTCNNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(.............GAC.....ATC.............|.............GAC.....CTC.............|.............GAC.....GTC.............|.............GAT.....ATC.............|.............GAT.....CTC.............|.............GAT.....GTC.............|.............GAG.....ATC.............|.............GAG.....ATC.............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("PpiI#");
        $endonuclease->setSamePattern(["PpiI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNGAACNNNNNCTCNNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(............GAAC.....CTC.............|.............GAG.....GTTC............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("PsrI#");
        $endonuclease->setSamePattern(["PsrI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNGAACNNNNNNTACNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(............GAAC......TAC............|............GTA......GTTC............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(7);
        $manager->persist($endonuclease);

        $endonuclease = new TypeIIbEndonuclease();
        $endonuclease->setId("TstI#");
        $endonuclease->setSamePattern(["TstI"]);
        $endonuclease->setRecognitionPattern("_NNNNN'NNNNNNNNCACNNNNNNTCCNNNNNNN_NNNNN'");
        $endonuclease->setComputingPattern("(.............CAC......TCC............|............GGA......GTG.............)");
        $endonuclease->setLengthRecognitionPattern(37);
        $endonuclease->setCleavagePosUpper(5);
        $endonuclease->setCleavagePosLower(-5);
        $endonuclease->setNbNonNBases(6);
        $manager->persist($endonuclease);

        $manager->flush();
    }
}