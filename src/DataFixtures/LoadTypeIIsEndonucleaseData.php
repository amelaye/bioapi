<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-13
 * Time: 18:06
 */

namespace App\DataFixtures;

use App\Entity\TypeIIsEndonuclease;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoadTypeIIsEndonucleaseData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $aEnzymes = array(
            "AarI" => [["AarI"],"CACCTGCNNNN'NNNN_","(CACCTGC........)",15,11,4,7],
            "AarI@" => [[""],"","(........GCAGGTG)",15,0,4,7],
            "AbaSI" => [["AbaSI"],"CNNNNNNNNN_NN'","(C...........)",11,11,-2,1],
            "AbaSI@" => [[""],"","(...........G)",11,2,-2,1],
            "Acc36I" => [["Acc36I,BfuAI,BspMI,BveI"],"ACCTGCNNNN'NNNN_","(ACCTGC........)",14,10,4,6],
            "Acc36I@" => [[""],"","(........GCAGGT)",14,0,4,6],
            "AclWI" => [["AclWI,AlwI,BspPI"],"GGATCNNNN'N_","(GGATC.....)",10,9,1,5],
            "AclWI@" => [[""],"","(.....GATCC)",10,0,1,5],
            "AcuI" => [["AcuI,Eco57I"],"CTGAAGNNNNNNNNNNNNNN_NN'","(CTGAAG................)",22,22,-2,6],
            "AcuI@" => [[""],"","(................CTTCAG)",22,2,-2,6],
            "Alw26I" => [["Alw26I,BcoDI,BsmAI,BstMAI"],"GTCTCN'NNNN_","(GTCTC.....)",10,6,4,5],
            "Alw26I@" => [[""],"","(.....GAGAC)",10,0,4,5],
            "ArsI" => [["ArsI"],"GACNNNNNNTTYGNNNNNN_NNNNN'","(GAC......TTCG...........|GAC......TTTG...........)",24,24,-5,7],
            "ArsI@" => [[""],"","(...........CGAA......GTC|...........CAAA......GTC)",24,5,-5,7],
            "AsuHPI" => [["AsuHPI,HphI"],"GGTGANNNNNNN_N'","(GGTGA........)",13,13,-1,5],
            "AsuHPI@" => [[""],"","(........TCACC)",13,1,-1,5],
            "BbsI" => [["BbsI,BpiI,BpuAI,BstV2I"],"GAAGACNN'NNNN_","(GAAGAC......)",12,8,4,6],
            "BbsI@" => [[""],"","(......GTCTTC)",12,0,4,6],
            "BbvI" => [["BbvI,BseXI,BstV1I,Lsp1109I"],"GCAGCNNNNNNNN'NNNN_","(GCAGC............)",17,13,4,5],
            "BbvI@" => [[""],"","(............GCTGC)",17,0,4,5],
            "BccI" => [["BccI"],"CCATCNNNN'N_","(CCATC.....)",10,9,1,5],
            "BccI@" => [[""],"","(.....GATGG)",10,0,1,5],
            "BceAI" => [["BceAI"],"ACGGCNNNNNNNNNNNN'NN_","(ACGGC..............)",19,17,2,5],
            "BceAI@" => [[""],"","(..............GCCGT)",19,0,2,5],
            "BciVI" => [["BciVI,BfuI,BsuI"],"GTATCCNNNNN_N'","(GTATCC......)",12,12,-1,6],
            "BciVI@" => [[""],"","(......GGATAC)",12,1,-1,6],
            "BfiI" => [["BfiI,BmrI,BmuI"],"ACTGGGNNNN_N'","(ACTGGG.....)",11,11,-1,6],
            "BfiI@" => [[""],"","(.....CCCAGT)",11,1,-1,6],
            "BmsI" => [["BmsI,LweI,SfaNI"],"GCATCNNNNN'NNNN_","(GCATC.........)",14,10,4,5],
            "BmsI@" => [[""],"","(.........GATGC)",14,0,4,5],
            "BpmI" => [["BpmI,GsuI"],"CTGGAGNNNNNNNNNNNNNN_NN'","(CTGGAG................)",22,22,-2,6],
            "BpmI@" => [[""],"","(................CTCCAG)",22,2,-2,6],
            "BpuEI" => [["BpuEI"],"CTTGAGNNNNNNNNNNNNNN_NN'","(CTTGAG................)",22,22,-2,6],
            "BpuEI@" => [[""],"","(................CTCAAG)",22,2,-2,6],
            "BsaI" => [["BsaI,Bso31I,BspTNI,Eco31I"],"GGTCTCN'NNNN_","(GGTCTC.....)",11,7,4,6],
            "BsaI@" => [[""],"","(.....GAGACC)",11,0,4,6],
            "BsaMI" => [["BsaMI,BsmI,Mva1269I,PctI"],"GAATG_CN'","(GAATGC.)",7,7,-2,6],
            "BsaMI@" => [[""],"","(.GCATTC)",7,2,-2,6],
            "Bse1I" => [["Bse1I,BseNI,BsrI,BsrSI"],"ACTG_GN'","(ACTGG.)",6,6,-2,5],
            "Bse1I@" => [[""],"","(.CCAGT)",6,2,-2,5],
            "Bse3DI" => [["Bse3DI,BseMI,BsrDI"],"GCAATG_NN'","(GCAATG..)",8,8,-2,6],
            "Bse3DI@" => [[""],"","(..CATTGC)",8,2,-2,6],
            "BseGI" => [["BseGI,BstF5I"],"GGATG_NN'","(GGATG..)",7,7,-2,5],
            "BseGI@" => [[""],"","(..CATCC)",7,2,-2,5],
            "BseMII" => [["BseMII"],"CTCAGNNNNNNNN_NN'","(CTCAG..........)",15,15,-2,5],
            "BseMII@" => [[""],"","(..........CTGAG)",15,2,-2,5],
            "BseRI" => [["BseRI"],"GAGGAGNNNNNNNN_NN'","(GAGGAG..........)",16,16,-2,6],
            "BseRI@" => [[""],"","(..........CTCCTC)",16,2,-2,6],
            "BsgI" => [["BsgI"],"GTGCAGNNNNNNNNNNNNNN_NN'","(GTGCAG................)",22,22,-2,6],
            "BsgI@" => [[""],"","(................CTGCAC)",22,2,-2,6],
            "BslFI" => [["BslFI,FaqI"],"GGGACNNNNNNNNNN'NNNN_","(GGGAC..............)",19,15,4,5],
            "BslFI@" => [[""],"","(..............GTCCC)",19,0,4,5],
            "BsmBI" => [["BsmBI,Esp3I"],"CGTCTCN'NNNN_","(CGTCTC.....)",11,7,4,6],
            "BsmBI@" => [[""],"","(.....GAGACG)",11,0,4,6],
            "BsmFI" => [["BsmFI"],"GGGACNNNNNNNNNN'NNNN_","(GGGAC..............)",19,15,4,5],
            "BsmFI@" => [[""],"","(..............GTCCC)",19,0,4,5],
            "BspCNI" => [["BspCNI"],"CTCAGNNNNNNN_NN'","(CTCAG.........)",14,14,-2,5],
            "BspCNI@" => [[""],"","(.........CTGAG)",14,2,-2,5],
            "BspQI" => [["BspQI,LguI,PciSI,SapI"],"GCTCTTCN'NNN_","(GCTCTTC....)",11,8,3,7],
            "BspQI@" => [[""],"","(....GAAGAGC)",11,0,3,7],
            "Bst6I" => [["Bst6I,Eam1104I,EarI,Ksp632I"],"CTCTTCN'NNN_","(CTCTTC....)",10,7,3,6],
            "Bst6I@" => [[""],"","(....GAAGAG)",10,0,3,6],
            "BtgZI" => [["BtgZI"],"GCGATGNNNNNNNNNN'NNNN_","(GCGATG..............)",20,16,4,6],
            "BtgZI@" => [[""],"","(..............CATCGC)",20,0,4,6],
            "BtsI" => [["BtsI"],"GCAGTG_NN'","(GCAGTG..)",8,8,-2,6],
            "BtsI@" => [[""],"","(..CACTGC)",8,2,-2,6],
            "BtsIMutI" => [["BtsIMutI"],"CAGTG_NN'","(CAGTG..)",7,7,-2,5],
            "BtsIMutI@" => [[""],"","(..CACTG)",7,2,-2,5],
            "EciI" => [["EciI"],"GGCGGANNNNNNNNN_NN'","(GGCGGA...........)",17,17,-2,6],
            "EciI@" => [[""],"","(...........TCCGCC)",17,2,-2,6],
            "Eco57MI" => [["Eco57MI"],"CTGRAGNNNNNNNNNNNNNN_NN'","(CTGAAG................|CTGGAG................)",22,22,-2,6],
            "Eco57MI@" => [[""],"","(................CTCCAG|................CTTCAG)",22,2,-2,6],
            "EcoP15I" => [["EcoP15I"],"CAGCAGNNNNNNNNNNNNNNNNNNNNNNNNN'NN_","(CAGCAG...........................)",33,31,2,6],
            "EcoP15I@" => [[""],"","(...........................CTGCTG)",33,0,2,6],
            "FauI" => [["FauI,SmuI"],"CCCGCNNNN'NN_","(CCCGC......)",11,9,2,5],
            "FauI@" => [[""],"","(......GCGGG)",11,0,2,5],
            "FokI" => [["FokI,BtsCI"],"GGATGNNNNNNNNN'NNNN_","(GGATG.............)",18,14,4,5],
            "FokI@" => [[""],"","(.............CATCC)",18,0,4,5],
            "FspEI" => [["FspEI"],"CCNNNNNNNNNNNN'NNNN_","(CC................)",18,14,4,2],
            "FspEI@" => [[""],"","(................GG)",18,0,4,2],
            "HgaI" => [["HgaI,CseI"],"GACGCNNNNN'NNNNN_","(GACGC..........)",15,10,5,5],
            "HgaI@" => [[""],"","(..........GCGTC)",15,0,5,5],
            "HpyAV" => [["HpyAV"],"GCTCTTCN'NNN_","(GACGC..........)",11,11,-1,5],
            "HpyAV@" => [[""],"","(......GAAGG)",11,1,-1,5],
            "LpnPI" => [["LpnPI"],"CCDGNNNNNNNNNN'NNNN_","(CCAG..............|CCGG..............|CCTG..............)",18,14,4,4],
            "LpnPI@" => [[""],"","(..............CTGG|..............CCGG|..............CAGG)",18,0,4,4],
            "MboII" => [["MboII"],"GAAGANNNNNNN_N'","(GAAGA........)",13,13,-1,5],
            "MboII@" => [[""],"","(........TCTTC)",13,1,-1,5],
            "MlyI" => [["MlyI,SchI"],"GAGTCNNNNN'","(GAGTC.....)",10,10,0,5],
            "MlyI@" => [[""],"","(.....GACTC)",10,0,0,5],
            "MmeI" => [["MmeI"],"TCCRACNNNNNNNNNNNNNNNNNN_NN'","(TCCAAC....................|TCCGAC....................)",26,26,-2,6],
            "MmeI@" => [[""],"","(....................GTCGGA|....................GTTGGA)",26,2,-2,6],
            "MnlI" => [["MnlI"],"CCTCNNNNNN_N'","(CCTC.......)",11,11,-1,4],
            "MnlI@" => [[""],"","(.......GAGG)",11,1,-1,4],
            "MspJI" => [["MspJI"],"CNNRNNNNNNNNN'NNNN_","(C..A.............|C..G.............)",17,13,4,3],
            "MspJI@" => [[""],"","(.............T..G|.............C..G)",17,0,4,3],
            "NmeAIII" => [["NmeAIII"],"GCCGAGNNNNNNNNNNNNNNNNNNN_NN'","(GCCGAG.....................)",27,27,-2,6],
            "NmeAIII@" => [[""],"","(.....................CTCGGC)",27,2,-2,6],
            "PleI" => [[""],"","(.....GACTC)",10,0,1,5],
            "SgeI" => [["SgeI"],"CNNGNNNNNNNNN'NNNN_","(C..G.............)",17,13,4,2],
            "SgeI@" => [[""],"","(.............C..G)",17,0,4,2],
            "TaqII" => [["TaqII"],"GACCGANNNNNNNNN_NN' or CACCCANNNNNNNNN_NN'","(GACCGA...........|CACCCA...........)",17,17,-2,6],
            "TaqII@" => [[""],"","(...........TCGGTC|...........TGGGTG)",17,2,-2,6],
            "TsoI" => [["TsoI"],"TARCCANNNNNNNNN_NN'","(TAACCA...........|TAGCCA...........)",17,17,-2,6],
            "TsoI@" => [[""],"","(...........TGGTTA|...........TGGCTA)",17,2,-2,6],
            "TspDTI" => [["TspDTI"],"ATGAANNNNNNNNN_NN'","(ATGAA...........)",16,16,-2,5],
            "TspDTI@" => [[""],"","(...........TTCAT)",16,2,-2,5],
            "TspGWI" => [["TspGWI"],"ACGGANNNNNNNNN_NN'","(ACGGA...........)",16,16,-2,5],
            "TspGWI@" => [[""],"","(...........TCCGT)",16,2,-2,5],
        );

        foreach ($aEnzymes as $key => $enzyme) {
            $endonuclease = new TypeIIsEndonuclease();
            $endonuclease->setId($key);
            $endonuclease->setSamePattern($enzyme[0]);
            $endonuclease->setRecognitionPattern($enzyme[1]);
            $endonuclease->setComputingPattern($enzyme[2]);
            $endonuclease->setLengthRecognitionPattern($enzyme[3]);
            $endonuclease->setCleavagePosUpper($enzyme[4]);
            $endonuclease->setCleavagePosLower($enzyme[5]);
            $endonuclease->setNbNonNBases($enzyme[6]);
            $manager->persist($endonuclease);
        }
        $manager->flush();
    }
}