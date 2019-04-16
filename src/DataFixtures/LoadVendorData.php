<?php
/**
 * Created by PhpStorm.
 * User: amelaye
 * Date: 2019-04-16
 * Time: 14:55
 */

namespace App\DataFixtures;

use App\Entity\Vendor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadVendorData extends fixture
{
    public function load(ObjectManager $manager)
    {
        $vendors = array(
            "AanI" => "F",
            "AarI" => "F",
            "AasI" => "F",
            "AatII" => "FIKMNR",
            "AbaSI" => "N",
            "AbsI" => "I",
            "AccI" => "BJKMNQRSUX",
            "AccII" => "JK",
            "AccIII" => "JKR",
            "Acc16I" => "I",
            "Acc36I" => "I",
            "Acc65I" => "FINR",
            "AccB1I" => "I",
            "AccB7I" => "I",
            "AccBSI" => "I",
            "AciI" => "N",
            "AclI" => "IN",
            "AclWI" => "I",
            "AcoI" => "I",
            "AcsI" => "I",
            "AcuI" => "IN",
            "AcvI" => "QX",
            "AcyI" => "J",
            "AdeI" => "F",
            "AfaI" => "BK",
            "AfeI" => "IN",
            "AfiI" => "V",
            "AflII" => "JKN",
            "AflIII" => "MN",
            "AgeI" => "JNR",
            "AgsI" => "I",
            "AhdI" => "N",
            "AhlI" => "IV",
            "AjiI" => "F",
            "AjnI" => "I",
            "AjuI" => "F",
            "AleI" => "N",
            "AlfI" => "F",
            "AloI" => "F",
            "AluI" => "BCFIJKMNOQRSUVXY",
            "AluBI" => "I",
            "AlwI" => "N",
            "Alw21I" => "F",
            "Alw26I" => "F",
            "Alw44I" => "FJ",
            "AlwNI" => "N",
            "Ama87I" => "IV",
            "Aor13HI" => "K",
            "Aor51HI" => "K",
            "ApaI" => "BFIJKMNQRSUVX",
            "ApaLI" => "CKNU",
            "ApeKI" => "N",
            "ApoI" => "N",
            "ArsI" => "I",
            "AscI" => "N",
            "AseI" => "JNO",
            "AsiGI" => "IV",
            "AsiSI" => "IN",
            "Asp700I" => "M",
            "Asp718I" => "M",
            "AspA2I" => "IV",
            "AspLEI" => "IV",
            "AspS9I" => "IV",
            "AssI" => "U",
            "AsuII" => "C",
            "AsuC2I" => "I",
            "AsuHPI" => "IV",
            "AsuNHI" => "IV",
            "AvaI" => "JNQRUX",
            "AvaII" => "JNRXY",
            "AvrII" => "N",
            "AxyI" => "J",
            "BaeI" => "N",
            "BaeGI" => "N",
            "BalI" => "BJKQRX",
            "BamHI" => "BCFIJKMNOQRSUVXY",
            "BanI" => "NRU",
            "BanII" => "KNX",
            "BarI" => "I",
            "BasI" => "U",
            "BauI" => "F",
            "BbrPI" => "M",
            "BbsI" => "N",
            "BbvI" => "N",
            "Bbv12I" => "IV",
            "BbvCI" => "N",
            "BccI" => "N",
            "BceAI" => "N",
            "BcgI" => "N",
            "BciT130I" => "K",
            "BciVI" => "N",
            "BclI" => "CFJMNORSUY",
            "BcnI" => "FK",
            "BcoDI" => "N",
            "BcuI" => "F",
            "BfaI" => "N",
            "BfmI" => "F",
            "BfoI" => "F",
            "BfrI" => "M",
            "BfuI" => "F",
            "BfuAI" => "N",
            "BfuCI" => "N",
            "BglI" => "CFIJKNOQRUVXY",
            "BglII" => "BCFIJKMNOQRSUXY",
            "BisI" => "I",
            "BlnI" => "KMS",
            "BlpI" => "N",
            "BlsI" => "I",
            "BmcAI" => "V",
            "Bme18I" => "IV",
            "Bme1390I" => "F",
            "BmeRI" => "V",
            "BmeT110I" => "BK",
            "BmgBI" => "N",
            "BmgT120I" => "K",
            "BmiI" => "V",
            "BmrI" => "N",
            "BmrFI" => "V",
            "BmsI" => "F",
            "BmtI" => "INV",
            "BmuI" => "I",
            "BoxI" => "F",
            "BpiI" => "F",
            "BplI" => "F",
            "BpmI" => "IN",
            "Bpu10I" => "FINV",
            "Bpu14I" => "IV",
            "Bpu1102I" => "FK",
            "BpuEI" => "N",
            "BpuMI" => "V",
            "BpvUI" => "V",
            "BsaI" => "N",
            "Bsa29I" => "I",
            "BsaAI" => "N",
            "BsaBI" => "N",
            "BsaHI" => "N",
            "BsaJI" => "N",
            "BsaWI" => "N",
            "BsaXI" => "N",
            "Bsc4I" => "I",
            "Bse1I" => "IV",
            "Bse8I" => "IV",
            "Bse21I" => "IV",
            "Bse118I" => "IV",
            "BseAI" => "CM",
            "BseBI" => "C",
            "BseCI" => "C",
            "BseDI" => "F",
            "Bse3DI" => "IV",
            "BseGI" => "F",
            "BseJI" => "F",
            "BseLI" => "F",
            "BseMI" => "F",
            "BseMII" => "F",
            "BseNI" => "F",
            "BsePI" => "IV",
            "BseRI" => "N",
            "BseSI" => "F",
            "BseXI" => "F",
            "BseX3I" => "IV",
            "BseYI" => "N",
            "BsgI" => "N",
            "Bsh1236I" => "F",
            "Bsh1285I" => "F",
            "BshFI" => "C",
            "BshNI" => "F",
            "BshTI" => "BF",
            "BshVI" => "V",
            "BsiEI" => "N",
            "BsiHKAI" => "N",
            "BsiHKCI" => "QX",
            "BsiSI" => "C",
            "BsiWI" => "N",
            "BslI" => "N",
            "BslFI" => "I",
            "BsmI" => "JMNS",
            "BsmAI" => "N",
            "BsmBI" => "N",
            "BsmFI" => "N",
            "BsnI" => "V",
            "Bso31I" => "IV",
            "BsoBI" => "N",
            "Bsp13I" => "IV",
            "Bsp19I" => "IV",
            "Bsp68I" => "F",
            "Bsp119I" => "F",
            "Bsp120I" => "F",
            "Bsp143I" => "F",
            "Bsp1286I" => "JKN",
            "Bsp1407I" => "FK",
            "Bsp1720I" => "IV",
            "BspACI" => "I",
            "BspCNI" => "N",
            "BspDI" => "N",
            "BspEI" => "N",
            "BspFNI" => "I",
            "BspHI" => "N",
            "BspLI" => "F",
            "BspMI" => "N",
            "BspOI" => "F",
            "BspPI" => "F",
            "BspQI" => "N",
            "BspTI" => "F",
            "BspT104I" => "K",
            "BspT107I" => "K",
            "BsrI" => "N",
            "BsrBI" => "N",
            "BsrDI" => "N",
            "BsrFI" => "N",
            "BsrGI" => "N",
            "BsrSI" => "R",
            "BssAI" => "C",
            "BssECI" => "I",
            "BssHII" => "JKMNQRSX",
            "BssKI" => "N",
            "BssMI" => "V",
            "BssNI" => "V",
            "BssNAI" => "IV",
            "BssSI" => "N",
            "BssT1I" => "IV",
            "Bst6I" => "IV",
            "Bst1107I" => "FK",
            "BstACI" => "I",
            "BstAFI" => "I",
            "BstAPI" => "IN",
            "BstAUI" => "IV",
            "BstBI" => "N",
            "Bst2BI" => "IV",
            "BstBAI" => "IV",
            "Bst4CI" => "IV",
            "BstC8I" => "I",
            "BstDEI" => "IV",
            "BstDSI" => "IV",
            "BstEII" => "CJNRSU",
            "BstENI" => "IV",
            "BstF5I" => "IV",
            "BstFNI" => "IV",
            "BstH2I" => "IV",
            "BstHHI" => "IV",
            "BstKTI" => "I",
            "BstMAI" => "IV",
            "BstMBI" => "IV",
            "BstMCI" => "IV",
            "BstMWI" => "I",
            "BstNI" => "N",
            "BstNSI" => "I",
            "BstOI" => "R",
            "BstPI" => "K",
            "BstPAI" => "IV",
            "BstSCI" => "I",
            "BstSFI" => "I",
            "BstSLI" => "I",
            "BstSNI" => "IV",
            "BstUI" => "N",
            "Bst2UI" => "IV",
            "BstV1I" => "I",
            "BstV2I" => "IV",
            "BstXI" => "FIJKMNQRVX",
            "BstX2I" => "IV",
            "BstYI" => "N",
            "BstZI" => "R",
            "BstZ17I" => "N",
            "BsuI" => "I",
            "Bsu15I" => "F",
            "Bsu36I" => "NR",
            "BsuRI" => "FI",
            "BtgI" => "N",
            "BtgZI" => "N",
            "BtrI" => "I",
            "BtsI" => "N",
            "BtsIMutI" => "N",
            "BtsCI" => "N",
            "BtuMI" => "V",
            "BveI" => "F",
            "Cac8I" => "N",
            "CaiI" => "F",
            "CciI" => "I",
            "CciNI" => "IV",
            "CfoI" => "MRS",
            "Cfr9I" => "F",
            "Cfr10I" => "FK",
            "Cfr13I" => "F",
            "Cfr42I" => "F",
            "ClaI" => "BKMNQRSUX",
            "CpoI" => "FK",
            "CseI" => "F",
            "CsiI" => "F",
            "CspI" => "R",
            "Csp6I" => "F",
            "CspAI" => "C",
            "CspCI" => "N",
            "CviAII" => "N",
            "CviJI" => "QX",
            "CviKI-1" => "N",
            "CviQI" => "N",
            "DdeI" => "KMNOQRSX",
            "DinI" => "V",
            "DpnI" => "BEFKMNOQRSX",
            "DpnII" => "N",
            "DraI" => "BFIJKMNQRSUVXY",
            "DraIII" => "IMNV",
            "DrdI" => "N",
            "DriI" => "I",
            "DseDI" => "IV",
            "EaeI" => "KN",
            "EagI" => "N",
            "Eam1104I" => "F",
            "Eam1105I" => "FK",
            "EarI" => "N",
            "EciI" => "N",
            "Ecl136II" => "F",
            "EclXI" => "MS",
            "Eco24I" => "F",
            "Eco31I" => "F",
            "Eco32I" => "F",
            "Eco47I" => "F",
            "Eco47III" => "FMR",
            "Eco52I" => "FK",
            "Eco57I" => "F",
            "Eco72I" => "F",
            "Eco81I" => "FK",
            "Eco88I" => "F",
            "Eco91I" => "F",
            "Eco105I" => "F",
            "Eco130I" => "F",
            "Eco147I" => "F",
            "EcoICRI" => "IRV",
            "EcoNI" => "N",
            "EcoO65I" => "K",
            "EcoO109I" => "FJKN",
            "EcoP15I" => "N",
            "EcoRI" => "BCFIJKMNOQRSUVXY",
            "EcoRII" => "FJ",
            "EcoRV" => "BCIJKMNOQRSUVXY",
            "EcoT14I" => "K",
            "EcoT22I" => "BK",
            "EcoT38I" => "J",
            "Eco53kI" => "N",
            "EgeI" => "I",
            "EheI" => "F",
            "ErhI" => "IV",
            "Esp3I" => "F",
            "FaeI" => "I",
            "FaiI" => "I",
            "FalI" => "I",
            "FaqI" => "F",
            "FatI" => "IN",
            "FauI" => "IN",
            "FauNDI" => "IV",
            "FbaI" => "K",
            "FblI" => "IV",
            "Fnu4HI" => "N",
            "FokI" => "IJKMNVX",
            "FriOI" => "IV",
            "FseI" => "N",
            "FspI" => "JN",
            "FspAI" => "F",
            "FspBI" => "F",
            "FspEI" => "N",
            "Fsp4HI" => "I",
            "GlaI" => "I",
            "GluI" => "I",
            "GsaI" => "I",
            "GsuI" => "F",
            "HaeII" => "JKNR",
            "HaeIII" => "BIJKMNOQRSUXY",
            "HapII" => "BK",
            "HgaI" => "IN",
            "HhaI" => "BFJKNQRUXY",
            "Hin1I" => "FK",
            "Hin1II" => "F",
            "Hin6I" => "F",
            "HinP1I" => "N",
            "HincII" => "BFJKNOQRUXY",
            "HindII" => "IMV",
            "HindIII" => "BCFIJKMNOQRSUVXY",
            "HinfI" => "BCFIJKMNOQRUVXY",
            "HpaI" => "BCIJKMNQRSUVX",
            "HpaII" => "FINQRSUVX",
            "HphI" => "FN",
            "Hpy8I" => "F",
            "Hpy99I" => "N",
            "Hpy166II" => "N",
            "Hpy188I" => "N",
            "Hpy188III" => "N",
            "HpyAV" => "N",
            "HpyCH4III" => "N",
            "HpyCH4IV" => "N",
            "HpyCH4V" => "N",
            "HpyF3I" => "F",
            "HpyF10VI" => "F",
            "HpySE526I" => "I",
            "Hsp92I" => "R",
            "Hsp92II" => "R",
            "HspAI" => "IV",
            "KasI" => "N",
            "KflI" => "F",
            "KpnI" => "BCFIJKMNOQRSUVXY",
            "Kpn2I" => "F",
            "KroI" => "I",
            "KspI" => "MS",
            "Ksp22I" => "IV",
            "KspAI" => "F",
            "Kzo9I" => "I",
            "LguI" => "F",
            "LpnPI" => "N",
            "Lsp1109I" => "F",
            "LweI" => "F",
            "MabI" => "I",
            "MaeI" => "M",
            "MaeII" => "M",
            "MaeIII" => "M",
            "MalI" => "I",
            "MauBI" => "F",
            "MbiI" => "F",
            "MboI" => "BCFKNQRUXY",
            "MboII" => "FIJKNQRVX",
            "MfeI" => "IN",
            "MflI" => "K",
            "MhlI" => "IV",
            "MlsI" => "F",
            "MluI" => "BFIJKMNOQRUVX",
            "MluCI" => "N",
            "MluNI" => "M",
            "MlyI" => "N",
            "Mly113I" => "I",
            "MmeI" => "N",
            "MnlI" => "FINQVX",
            "Mph1103I" => "F",
            "MreI" => "F",
            "MroI" => "MO",
            "MroNI" => "IV",
            "MroXI" => "IV",
            "MscI" => "NO",
            "MseI" => "BN",
            "MslI" => "N",
            "MspI" => "FIJKNQRSUVXY",
            "Msp20I" => "IV",
            "MspA1I" => "INRV",
            "MspCI" => "C",
            "MspJI" => "N",
            "MspR9I" => "I",
            "MssI" => "F",
            "MunI" => "FKM",
            "MvaI" => "FMS",
            "Mva1269I" => "F",
            "MvnI" => "M",
            "MvrI" => "U",
            "MwoI" => "N",
            "NaeI" => "CKNU",
            "NarI" => "JMNQRUX",
            "NciI" => "JNR",
            "NcoI" => "BCFJKMNOQRSUXY",
            "NdeI" => "BFJKMNQRSUXY",
            "NdeII" => "JM",
            "NgoMIV" => "N",
            "NheI" => "BCFJKMNOQRSUX",
            "NlaIII" => "N",
            "NlaIV" => "N",
            "NmeAIII" => "N",
            "NmuCI" => "F",
            "NotI" => "BCFJKMNOQRSUXY",
            "NruI" => "BCIJKMNQRUX",
            "NsbI" => "FK",
            "NsiI" => "JMNQRSUX",
            "NspI" => "N",
            "NspV" => "J",
            "OliI" => "F",
            "PacI" => "FNO",
            "PaeI" => "F",
            "PaeR7I" => "N",
            "PagI" => "F",
            "PalAI" => "I",
            "PasI" => "F",
            "PauI" => "F",
            "PceI" => "IV",
            "PciI" => "IN",
            "PciSI" => "I",
            "PcsI" => "I",
            "PctI" => "IV",
            "PdiI" => "F",
            "PdmI" => "F",
            "PfeI" => "F",
            "Pfl23II" => "F",
            "PflFI" => "N",
            "PflMI" => "N",
            "PfoI" => "F",
            "PinAI" => "MQX",
            "PleI" => "N",
            "Ple19I" => "I",
            "PluTI" => "N",
            "PmaCI" => "K",
            "PmeI" => "N",
            "PmlI" => "N",
            "PpsI" => "I",
            "Ppu21I" => "F",
            "PpuMI" => "N",
            "PscI" => "F",
            "PshAI" => "KN",
            "PshBI" => "K",
            "PsiI" => "IN",
            "Psp5II" => "F",
            "Psp6I" => "I",
            "Psp1406I" => "FK",
            "Psp124BI" => "IV",
            "PspCI" => "IV",
            "PspEI" => "IV",
            "PspGI" => "N",
            "PspLI" => "I",
            "PspN4I" => "I",
            "PspOMI" => "INV",
            "PspPI" => "C",
            "PspPPI" => "I",
            "PspXI" => "IN",
            "PsrI" => "I",
            "PstI" => "BCFIJKMNOQRSUVXY",
            "PstNI" => "I",
            "PsuI" => "F",
            "PsyI" => "F",
            "PteI" => "F",
            "PvuI" => "BFKMNOQRSUXY",
            "PvuII" => "BCFIJKMNOQRSUXY",
            "RgaI" => "I",
            "RigI" => "I",
            "RruI" => "F",
            "RsaI" => "CFIJMNQRSVXY",
            "RsaNI" => "I",
            "RseI" => "F",
            "RsrII" => "NQX",
            "Rsr2I" => "IV",
            "SacI" => "BFJKMNOQRSUX",
            "SacII" => "BJKNOQRX",
            "SalI" => "BCFIJKMNOQRSUVXY",
            "SapI" => "N",
            "SaqAI" => "F",
            "SatI" => "F",
            "Sau96I" => "JNU",
            "Sau3AI" => "CJKMNRSU",
            "SbfI" => "INV",
            "ScaI" => "BCFJKMNOQRSX",
            "SchI" => "F",
            "ScrFI" => "JN",
            "SdaI" => "F",
            "SduI" => "F",
            "SetI" => "I",
            "SexAI" => "MN",
            "SfaAI" => "F",
            "SfaNI" => "INV",
            "SfcI" => "N",
            "SfiI" => "CFIJKMNOQRSUVX",
            "SfoI" => "N",
            "Sfr274I" => "IV",
            "Sfr303I" => "IV",
            "SfuI" => "M",
            "SgeI" => "F",
            "SgfI" => "R",
            "SgrAI" => "N",
            "SgrBI" => "C",
            "SgrDI" => "F",
            "SgsI" => "F",
            "SlaI" => "C",
            "SmaI" => "BCFIJKMNOQRSUVXY",
            "SmiI" => "FIKV",
            "SmiMI" => "IV",
            "SmlI" => "N",
            "SmoI" => "F",
            "SnaBI" => "CKMNRU",
            "SpeI" => "BJKMNOQRSUX",
            "SphI" => "BCIJKMNOQRSVX",
            "Sse9I" => "IV",
            "Sse8387I" => "K",
            "SseBI" => "C",
            "SsiI" => "F",
            "SspI" => "BCFIJKMNQRSUVX",
            "SspDI" => "F",
            "SstI" => "C",
            "StrI" => "U",
            "StuI" => "BJKMNQRUX",
            "StyI" => "CJN",
            "StyD4I" => "N",
            "SwaI" => "JMN",
            "TaaI" => "F",
            "TaiI" => "F",
            "TaqI" => "BCFIJKMNQRSUVXY",
            "TaqII" => "QX",
            "TasI" => "F",
            "TatI" => "F",
            "TauI" => "F",
            "TfiI" => "N",
            "Tru1I" => "F",
            "Tru9I" => "IMRV",
            "TscAI" => "F",
            "TseI" => "N",
            "TseFI" => "I",
            "Tsp45I" => "N",
            "TspDTI" => "QX",
            "TspGWI" => "QX",
            "TspMI" => "N",
            "TspRI" => "N",
            "Tth111I" => "IKNQVX",
            "Van91I" => "FK",
            "Vha464I" => "V",
            "VneI" => "IV",
            "VpaK11BI" => "K",
            "VspI" => "FIRV",
            "XagI" => "F",
            "XapI" => "F",
            "XbaI" => "BCFIJKMNOQRSUVXY",
            "XceI" => "F",
            "XcmI" => "N",
            "XhoI" => "BFJKMNOQRSUXY",
            "XhoII" => "R",
            "XmaI" => "INRUV",
            "XmaJI" => "F",
            "XmiI" => "F",
            "XmnI" => "NRU",
            "XspI" => "K",
            "ZraI" => "INV",
            "ZrmI" => "I",
            "Zsp2I" => "IV"
        );

        foreach($vendors as $key => $data) {
            $vendor = new Vendor();
            $vendor->setId($key);
            $vendor->setVendor($data);
            $manager->persist($vendor);
        }

        $manager->flush();
    }

}