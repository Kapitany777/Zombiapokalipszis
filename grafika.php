<?php
session_start();

include_once("include/inc_page.php");
include_once("dictionary/dict_hungarian.php");

$page = new Page(SITE_NAME, TITLE_ILLUSTRATIONS);
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

    <h2>A novellákhoz készített illusztrációk</h2>

    <p class="rajz">
        <img src="images/illusztraciok/odin_a_fertozes_terjed.jpg" alt="A fertőzés terjed" class="rajz"/>
        <br/>
        Ignácz Ágoston: A fertőzés terjed
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/odin_a_pillanat_varazsa.jpg" alt="A pillanat varázsa" class="rajz"/>
        <br/>
        Ignácz Ágoston: A pillanat varázsa
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/odin_halottak_napkozben.jpg" alt="Halottak napközben" class="rajz"/>
        <br/>
        Ignácz Ágoston: Halottak napközben
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/odin_ver_es_katrany.jpg" alt="Vér és kátrány" class="rajz"/>
        <br/>
        Ignácz Ágoston: Vér és kátrány
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/odin_szaz_lepes.jpg" alt="Száz lépés" class="rajz"/>
        <br/>
        Ignácz Ágoston: Száz lépés
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/odin_tovabbi_lepesek.jpg" alt="További lépések" class="rajz"/>
        <br/>
        Ignácz Ágoston: További lépések
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/zoller_dezso.jpg" alt="Dezső" class="rajz"/>
        <br/>
        Kristálysólyom: Dezső
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/zoller_csizma.jpg" alt="Gcs" class="rajz"/>
        <br/>
        Kristálysólyom:
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/zoller_bela.jpg" alt="Béla" class="rajz"/>
        <br/>
        Kristálysólyom: Béla
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/mucimacko.jpg" alt="Mucimackó" class="rajz"/>
        <br/>
        Mucimackó
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/czinkoczi_security.jpg" alt="Security" class="rajz"/>
        <br/>
        Czinkóczi Krisztina: Security
    </p>

    <p class="rajz">
        <img src="images/illusztraciok/czinkoczi_temeto.jpg" alt="Temető" class="rajz"/>
        <br/>
        Czinkóczi Krisztina: Temető
    </p>

    <h2>Illusztrációk a második kötethez</h2>

    <p class="rajz">
        <img src="images/illusztraciok2/czinkoczi_etelkaneni.jpg" alt="Etelka néni" />
        <br />
        Czinkóczi Krisztina: Etelka néni
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/czinkoczi_muanyag.jpg" alt="Mert ez műanyag" />
        <br />
        Czinkóczi Krisztina: Mert ez műanyag
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/ignacz_oregember.jpg" alt="Öregember nem vén ember" />
        <br />
        Ignácz Ágoston: Öregember nem vén ember
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/ignacz_kecskelapi.jpg" alt="Kecskelápi anarchista zombi" />
        <br />
        Ignácz Ágoston: Kecskelápi anarchista zombi
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/ignacz_lali.jpg" alt="Lali és Zsuszi + Zed" />
        <br />
        Ignácz Ágoston: Lali és Zsuszi + Zed
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/kristalysolyom_lali.jpg" alt="Zsuzsi és Lali, ja meg Zed" />
        <br />
        Kristálysólyom: Zsuzsi és Lali, ja meg Zed
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/kristalysolyom_zombifutam.jpg" alt="A nagy zombifutam" />
        <br />
        Kristálysólyom: A nagy zombifutam
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/andy_csirkepaprikas.jpg" alt="Csirkepaprikás" />
        <br />
        Andy Baron: Csirkepaprikás
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/zora_zuzupetas.jpg" alt="A Zuzu Petas küldetés" />
        <br />
        Zora: A Zuzu Petas küldetés
    </p>

    <p class="rajz">
        <img src="images/illusztraciok2/zora_pulacsek.jpg" alt="Adótanácstalanság" />
        <br />
        Zora: Adótanácstalanság
    </p>

</div>

<?php
$page->Footer();
?>
</body>

</html>
