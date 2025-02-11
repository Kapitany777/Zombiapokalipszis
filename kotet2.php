<?php
include_once("include/inc_page.php");
include_once("dictionary/dict_hungarian.php");

$page = new Page(SITE_NAME, TITLE_SECOND);
?>

<!DOCTYPE html>

<html>

<head>
    <?php
    print($page->HTMLCharset());
    print($page->HTMLStyleSheets());
    print($page->HTMLTitle());
    ?>
</head>

<body>
<div id="page">

    <?php
    $page->Header();
    $page->Menu();
    ?>

    <h2>A második kötet</h2>

    <p>
        A második kötet az első közvetlen folytatása. Ez a történet részben egy másik helyszínen játszódik (ld.a lenti leírást), részben
        pedig visszatekint az eredeti, simagöröngyösi helyszínre is.
    </p>

    <h2>Az eddig beérkezett írások</h2>

    <ul>
        <li>A második kötet világleírása PDF-ben: <a href="download/2/LF_konyv_20111229.pdf" target="_blank">LF_konyv_20111229.pdf</a></li>
        <li>Kapitány: Atomgerendástól Simagöröngyösig, avagy rémület a Bzmoton</li>
        <li>Cyrus Livingstone: Közjáték. Leszámolás a Fóka-szirtnél</li>
        <li>Damien Grove: A kettes számú vizsgálati alany</li>
        <li>Czinkóczi Krisztina: Etelka néni újra száguld!</li>
        <li>Ignácz Ágoston: Öregember nem vén ember</li>
        <li>Scholtz Róbert (Sigynnae): Szakíts, ha bírsz!</li>
        <li>Craz: Zsuzsi és Lali (ja meg a Zed)</li>
        <li>Craz és Cyrus Livingstone: Mert ez műanyag...</li>
        <li>Ndy: A pusztítás szimfóniája (kakofon), avagy a halott (paranormálisan materializálódott) nindzsa újra táncol</li>
        <li>Ndy: Adód, vagy nem adod!</li>
        <li>Mickey Long: Lángossütő akció</li>
    </ul>

    <h2>Az előzmények</h2>

    <p><img src="images/rip_stone.png" alt="RIP" width="128" height="128" class="illusztracio"/>
        Az első kötetben Az indián zombi suttogása című novellában megjelent a faluban a CIA, és lerendezték Suttogó, illetve a műhold kérdését.
        Bár a történetből nem derült ki, de a CIA emberei magukkal vitték a műhold használható alkatrészeit és néhány
        viszonylag épségben maradt zombit – szokás szerint további vizsgálatok céljából. Ezután az anyagot átadták az amerikai
        hadsereg fejlett technológiákkal (többek között az ufótechnológiával) foglalkozó kutatórészlegének. A hadsereg
        illetékesei ekkor megkeresték a Homoergaster írásában szereplő Dr. John Campbell-t és Dr. Bill Armstrongot
        (a néger tudóst), hogy lenne-e kedvük nekik dolgozni. A két tudós persze nem utasította vissza az érdekesnek
        ígérkező lehetőséget, így most ők a hadsereg alkalmazottaiként a Simagöröngyös-projekt vezető kutatói.
    </p>

    <h2 style="clear: both;">A helyszín</h2>

    <p><img src="images/skull.png" alt="Skull" width="128" height="128" class="illusztracio"/>
        A könyv helyszíne egy kis szigetecske, a Szent Lázár sziget valahol az Atlanti-óceán északi részén. Ez nem egy trópusi paradicsom,
        hanem egy zord időjárással, viharokkal és hideggel megáldott (vagy inkább megvert) sziget, ahol néhány halász
        próbál valahogy megélni. Ezen a helyen nincs is sok látnivaló, mindössze egy kis (Simagöröngyöshöz hasonló méretű)
        halászfalu, egy repülőtér, illetve a hadsereg titkos kutatóközpontja helyezkedik el itt, ahol a Simagöröngyös-projekt
        műveletei folynak.
    </p>

    <p>
        A faluban találhatók a halászok házai, a templom, melyben egy katolikus pap tart miséket, egy bevásárlóközpont
        a boltosokkal, néhány kocsma a kocsmárosokkal és az orvosi rendelő egy orvossal és az ő asszisztensével. A templomot
        még az 1700-as években építették a szigetre költöző telepesek, az ő málladozó sírköveik mind a mai napig láthatók
        a templomkerti temetőben. A település közelében helyezkedik el a kikötő, innen indulnak a halászok nap mint nap ki
        a tengerre. A kikötő mellett áll egy régi, de még ma is működő világítótorony. A torony őrei régebben a haditengerészetnél
        szolgáltak, leszerelésük után kerültek a szigetre. A faluban él néhány indián is, akik a sziget őslakosainak
        leszármazottai. A köztiszteletben álló helyi seriff is indián származású, aki büszkén vallja, hogy ősei között
        említheti Suttogót, a híres varázslót.
    </p>

    <p>
        A szigeten található repülőteret a II. világháborúban katonai célokra használták. Tengeralattjáró-elhárító
        járőrgépek és léghajók, illetve konvojkíséretet biztosító vadászrepülőgépek szálltak fel a reptérről. A háború
        szomorú emlékeként a parttól nem messze egy 1943-ban megfeneklett német tengeralattjáró roncsai láthatók, benne
        a tengerészek holttesteivel. Néhány német tengeralattjárós annak idején szerencsésen ki tudott jutni a partra,
        és végül a faluban telepedtek le. Leszármazottaik ma is a szigeten élnek, sőt, három, akkoriban még ifjoncnak
        számító tengerész, Hans, Helmut és Günther a falu tiszteletnek örvendő öregeinek számát gyarapítja. Tiszta időben
        a magasból jól kivehetők egy, a part menti sekély vízben lezuhant és elsüllyedt B-24 Liberator bombázó roncsai is.
        A háború után egy ideig még az amerikai haditengerészek üzemeltették a repteret, viszont ma már a légi-tengeri
        kutató és mentőszolgálat repülőgépei és helikopterei állomásoznak itt. Nem egyszer előfordult, hogy a
        Bermuda-háromszög közelében eltűnt hajók és repülőgépek után kutattak az itt állomásozó pilóták. A mentőszolgálat
        helyi parancsnoka egy Vietnamot is megjárt veterán pilóta. Néhány magánrepülőgép tulajdonosa is használja a repteret.
        Néha teherszállító járatok is érkeznek ide, melyek az itt élők számára nélkülözhetetlen árukat szállítják a szigetre.
    </p>

    <p>
        A sziget kietlen, sziklás részein ősi romok találhatók, melyek eredetére sem a régészek, sem az itt élő öreg
        indiánok nem tudnak elfogadható magyarázatot adni. A közvélekedés szerint az ősi kőkörökkel valami nincs rendben,
        ugyanis többen – köztük tapasztalt katonai pilóták is – tanúsították, hogy bizonyos napokon, sötétedés után a körök
        erős, kékes fénnyel világítanak az éjszakában. Amatőr búvárok a szigethez közel, a tenger alatt is találtak emberi
        kéz által a régmúltban megformált, sűrű iszappal borított, ciklopi építményeket.
    </p>

    <h2>Az alaptörténet</h2>

    <p><img src="images/bat.png" alt="Bat" width="128" height="128" class="illusztracio"/>
        A katonai kutatóközpont, ahol Campbell és Armstrong dolgozik, egy régi, még az amerikai polgárháború előtt
        épített udvarház alatt működik. Az akkor már hosszú évek óta elhagyatott ódon udvarházat a II. világháborúban
        sajátította ki a haditengerészet, hogy a repülőtéren dolgozó pilótáknak szállást tudjanak biztosítani. A háború
        alatt a romokban álló épületet felújították, és a pilóták védelmére mélyen a föld alá acélból és betonból masszív
        bunkereket építettek ki. A háború után a komplexumot átvette a hadsereg, és a katonák azóta is karbantartják
        a régi házat, illetve folyamatosan bővítik a föld mélyén meghúzódó kanyargós alagutakat. Az udvarházban ma az
        adminisztratív feladatokat ellátó és az őrszolgálatot adó felfegyverzett egyenruhások élnek, a bunkerekben
        pedig viszonylag kicsi, ám jól felszerelt laboratóriumok találhatók. Az egyik földmélyi laborban kapott helyet
        a Simagöröngyös-projekt csapata is. A többi, itt dolgozó kutató mesterséges intelligencia kutatásokkal foglalkozik,
        melynek végső célja autonóm harci robotok előállítása. A katonák és a kutatók szabadidejükben kijárhatnak a
        faluba, csak a munkájukról nem beszélhetnek a helyiekkel. A helyieket persze különösebben nem is érdekli a dolog,
        hiszen elsősorban munkájukkal vannak elfoglalva.
    </p>

    <p>
        Egy sötét, viharos éjszakán Campbell és Armstrong beautóznak katonai dzsipjükön a faluba, hogy az egyik
        kocsma plazmatévéjén megnézzék az aznap esti kosármeccs közvetítését. A békés sörözgetést a telefonjukra érkező
        riasztás szakítja meg – rögtön tudják, hogy valami baj történt a laborban...
    </p>

    <h2>A szereplők</h2>
    <p><img src="images/coffin.png" alt="Bat" width="128" height="128" class="illusztracio"/>
        <strong>Wladislav Lensky:</strong> aktív környezetvédő, régebben a Lengyel Különleges Erőknél szolgált
    </p>

    <p>
        <strong>Kis Ede:</strong> egyetemi hallgató és és egy középkori hagyományőrző egyesület tagja. Atomgerendásról hazafelé tartva a vonaton megtámadja egy zombi.
    </p>

    <p>
        <strong>Csipa Mihály:</strong> körzeti megbízott. Többnyire csak Misi. 37 éves, sportos testalkatú, kopasz, a rend éber őre. Hivatali idejét a szolgálati egyenruhájában
        tölti, magánéletében bőr rockerszerkót visel. Kemény, de igazságos. Van egy régi, de jól karbantartott MTZ-je, de munkaidőben a kitűnően felszerelt szolgálati Lada Nivával
        közlekedik. Szellemi értelemben kissé egyszerű, mondhatni a többiekhez képest mindig le van maradva két lépéssel. Ezért tart segédet.
    </p>

    <p>
        <strong>Szekeres Kálmán:</strong> Misi segéde. Amikor nagyon erőlködik, hogy megfeleljen, akkor Mikorkakálmán. Egyébként csak Szeka. 33 éves, rendőrtiszti főiskolát
        végzett, "alighajú", kisportolt fiatalember. Lokálpatrióta, szívét-lelkét kitenné Simagöröngyösért, ami szerinte a leggyönyörűbb magyarországi település. Ő maga kérte, hogy
        itt, szülőhelyén szolgálhassa és védhesse a rendet. Misivel az eltelt néhány év alatt jól összebarátkozott, együtt járnak motorozni a környéken. Egy vadiúj Harleyt hajt. A
        helyi lányok odavannak érte.
    </p>


</div>

<?php
$page->Footer();
?>
</body>

</html>
