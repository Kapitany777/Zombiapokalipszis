<?php
include_once("include/inc_page.php");
include_once("dictionary/dict_hungarian.php");

$page = new Page(SITE_NAME, TITLE_ABOUT_US);
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

    <h2>Rólunk írták</h2>

    <p>
        Ezen az oldalon a kötettel kapcsolatos hírekre, blogbejegyzésekre mutató hivatkozásokat találhatjátok.
    </p>

    <ul>
        <li><a href="http://andreaczovek.blogspot.com/2012/03/zombi-apokalipszis-kezdet-simagorongyos.html" target="_blank">Mab Tee: Zombi apokalipszis - A kezdet:
                Simagöröngyös</a></li>
        <li><a href="http://cyruslivingstone.blogspot.com/2012/03/zombitamadas.html" target="_blank">Cyrus Livingstone: Zombitámadás!</a></li>
        <li><a href="http://www.szentesinfo.hu/mozaik/2012/3/zombi.htm" target="_blank">Szentesi Mozaik: Zombi Apokalipszis – A kezdet: Simagöröngyös</a></li>
        <li><a href="http://www.szentesinfo.hu/szentesielet/2012/pdf/sze20120330_13.pdf" target="_blank">Szentesi Élet: Zombik "lidércfényben"; az 5.oldalon olvasható a cikk</a>
        </li>
        <li><a href="http://www.delmagyar.hu/szentes_hirek/lidercfeny_szentesen_elohalottak_simagorongyoson/2280563/" target="_blank">Délmagyar: Lidércfény Szentesen, élőhalottak
                Simagöröngyösön</a></li>
        <li><a href="http://talesfromtheblog.blog.hu/2013/05/17/zombi-apokalipszis_simagorongyoson" target="_blank">Tales From The Blog: Zombi-apokalipszis Simagöröngyösön</a></li>
        <li><a href="https://www.fantasybooks.hu/?p=14" target="_blank">Fantasy Books: Zombi-apokalipszis Simagöröngyösön</a></li>
        <li><a href="https://moly.hu/konyvek/bognar-zsolt-szerk-zombi-apokalipszis-a-kezdet-simagorongyos" target="_blank">Moly: Zombi Apokalipszis – A kezdet: Simagöröngyös</a></li>
        <li><a href="https://moly.hu/konyvek/bognar-zsolt-szerk-zombi-apokalipszis-a-simagorongyosi-remulet-folytatodik" target="_blank">Moly: Zombi Apokalipszis – A simagöröngyösi rémület folytatódik </a></li>
    </ul>

    <hr/>

    <h2>Könyvbemutató</h2>

    <p style="text-align: center;">
        <img src="images/zombi_meghivo.jpg" width="500" height="707" alt="Zombi könyvbemutató"/>
    </p>

    <p style="text-align: center;">
        2012.03.26-án volt egy könyvbemutatónk a szentesi könyvtárban. A fenti képen láthatjátok az eseményre készült meghívót.
    </p>

    <p style="text-align: center;">
        <img src="images/zombi_jimmy.jpg" width="500" height="375" alt="Zombi Jimmy"/>
    </p>

    <p style="text-align: center;">
        Zombi Jimmy
    </p>

    <p style="text-align: center;">
        <img src="images/zombi_konyvbemutato.jpg" width="500" height="375" alt="Zombi könyvbemutató"/>
    </p>

    <p style="text-align: center;">
        Egy fotó a könyvbemutatóról: Poszler György, Jimmy Cartwright, Kapitány, Homoergaster
    </p>

    <hr/>

    <h2>Kiadták a kötetet!</h2>

    <p style="text-align: center;">
        <img src="images/53-as_stand_zombikkal_reszlet.jpg" width="540" height="355" alt="Könyvfesztivál"/>
    </p>

    <p style="text-align: center;">
        Íme, egy fotó a Könyvfesztivál 53-as standjáról, ahová a Fapadoskönyv.hu települt ki.
    </p>

</div>

<?php
$page->Footer();
?>
</body>

</html>
