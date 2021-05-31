<?php
session_start();

include_once("include/inc_page.php");
include_once("dictionary/dict_hungarian.php");

$page = new Page(SITE_NAME, TITLE_MAIN);
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

    <h2>Bevezető</h2>

    <p>
        Ez itt a <a href="http://www.lidercfeny.hu/" target="_blank">Lidércfény Online Kulturális Magazin</a> simagöröngyösi zombi-apokalipszis kötetének hivatalos oldala. Itt
        megtalálhatsz mindent, amit Simagöröngyösről tudni kell.
    </p>

    <p>
        Az oldal grafikai elemeit a <a href="http://findicons.com/" target="_blank">http://findicons.com/</a> oldalon találtuk, a képeket Anthony Piraino illetve a Zeusbox Studio
        készítette.
        A fejléc felirata a Xara 3D5 programmal készült.
    </p>

    <p>
        A kötethez létrehozott Facebook-csoportot itt érheted el:
        <a href="http://www.facebook.com/groups/161297927316874/" target="_blank"><img src="felulet/facebook.png" alt="Facebook"/></a>
    </p>

    <p>
        2012.02.12.: végre megjelent a kötet! Letölthető a lentebb olvasható címekről!
    </p>

    <p>
        2012.03.25.: megjelent a kötet második, javított kiadása, amelyben elsősorban elgépeléseket javítottunk. Letölthető a lentebb olvasható címekről!
    </p>

    <p>
        2012.04.12.: megjelent a kötet egy újabb verziója, mégpedig a Fapadoskonyv.hu
        kiadásában. Itt elektronikus formában le lehetett tölteni a könyvet, illetve papír formában is meg lehetett rendelni, jelenleg nem él az oldal.
    </p>

    <p>
        2012.06.19.: az oldal elérhető a <a href="http://www.zombiapokalipszis.hu/">http://www.zombiapokalipszis.hu/</a> címen is.
    </p>

    <p>
        2020.03.16.: Több év szünet után ismét jelentkezünk! Megjelent a második kötet: Zombi Apokalipszis, avagy a simagöröngyösi rémület folytatódik.
    </p>

    <p>
        Utolsó módosítás: 2021.05.31.
    </p>

    <hr/>

    <h2 style="clear: both;">A letölthető második kötet</h2>

    <div>
        <a href="download/za_simagorongyos_rf_print.pdf" target="_blank">
            <img src="images/borito_2.jpg" alt="A második kötet borítója" width="225" class="illusztracio"/>
        </a>

        <p style="padding-top: 100px;">
            A <em>Zombi apokalipszis, A simagöröngyösi rémület folytatódik</em> című kötet (megjelent 2020.03.16-án) az alábbi címeken tölthető le:
        </p>

        <p>
            PDF formátum, jobb minőségű változat, kb.10MB:<br/>
            <a href="download/za_simagorongyos_rf_print.pdf" target="_blank">http://www.zombiapokalipszis.hu/download/za_simagorongyos_rf_print.pdf</a>
        </p>

        <p>
            PDF formátum, kisebb méretű változat, kb.2MB:<br/>
            <a href="download/za_simagorongyos_rf_screen.pdf" target="_blank">http://www.zombiapokalipszis.hu/download/za_simagorongyos_rf_screen.pdf</a>
        </p>

        <p>
            Epub formátum:<br/>
            <a href="download/za_simagorongyos_rf_ebook_fixed.epub">http://www.zombiapokalipszis.hu/download/za_simagorongyos_rf_ebook_fixed.epub</a>
            <br/>
            <a href="download/za_simagorongyos_rf_ebook_flow.epub">http://www.zombiapokalipszis.hu/download/za_simagorongyos_rf_ebook_flow.epub</a>
        </p>
    </div>

    <h2 style="clear: both;">A letölthető első kötet</h2>

    <div>
        <a href="download/zombiapokalipszis_simagorongyos.pdf" target="_blank">
            <img src="images/borito_1.jpg" alt="Az első kötet borítója" width="225" height="320" class="illusztracio"/>
        </a>

        <p style="padding-top: 100px;">
            A <em>Zombi apokalipszis, A kezdet: Simagöröngyös</em> című kötet az alábbi címeken tölthető le:
        </p>

        <p>
            PDF formátum, a könyv második, javított kiadása, kb.14MB:<br/>
            <a href="download/zombiapokalipszis_simagorongyos.pdf" target="_blank">http://www.zombiapokalipszis.hu/download/zombiapokalipszis_simagorongyos.pdf</a>
        </p>

        <p>
            Epub formátum, kb.700kB:<br/>
            <a href="download/zombiapokalipszis_simagorongyos.epub">http://www.zombiapokalipszis.hu/download/zombiapokalipszis_simagorongyos.epub</a>
        </p>

        <p>
            PDF formátum, a könyv első verziója, kb.18MB:<br/>
            <a href="download/zombiapokalipszis_simagorongyos_v1.pdf" target="_blank">http://www.zombiapokalipszis.hu/download/zombiapokalipszis_simagorongyos_v1.pdf</a>
        </p>
    </div>

    <h2 style="clear: both;">Fapadoskonyv.hu, az első kötet</h2>

    <div>
        <a href="http://fapadoskonyv.hu/zombi-apokalipszis-a-kezdet-simagorongyos.html" target="_blank">
            <img src="images/fapados_borito.jpg" alt="Az első kötet borítója" width="225" height="332" class="illusztracio"/>
        </a>

        <p style="padding-top: 100px;">
            A <em>Zombi apokalipszis, A kezdet: Simagöröngyös</em> a Fapadoskonyv.hu kiadó által megjelentetett verziója az alábbi címekről tölthető le:
        </p>

        <!--p>
            Papír formátum, 2400 Ft<br />
            <a href="http://fapadoskonyv.hu/zombi-apokalipszis-a-kezdet-simagorongyos.html" target="_blank">http://fapadoskonyv.hu/zombi-apokalipszis-a-kezdet-simagorongyos.html</a>
        </p-->

        <p>
            Epub formátum, kb.2.1MB:<br/>
            <a href="download/Lidercfeny_Zombi-Apokalipszis_DRMFREE.epub">http://www.zombiapokalipszis.hu/download/Lidercfeny_Zombi-Apokalipszis_DRMFREE.epub</a>
        </p>

        <p>
            Mobi formátum, kb.3.8MB:<br/>
            <a href="download/Lidercfeny_Zombi-Apokalipszis_DRMFREE.mobi">http://www.zombiapokalipszis.hu/download/Lidercfeny_Zombi-Apokalipszis_DRMFREE.mobi</a>
        </p>
    </div>

</div>

<?php
$page->Footer();
?>
</body>

</html>
