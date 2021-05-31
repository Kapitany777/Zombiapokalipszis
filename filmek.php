<?php
session_start();

include_once("include/inc_page.php");
include_once("dictionary/dict_hungarian.php");

$page = new Page(SITE_NAME, TITLE_VIDEO);
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

    <h2>Filmek Simagöröngyösről</h2>

    <p>
        Ezen az oldalon a simagöröngyösi világhoz készített filmjeinket, könyvelőzeteseinket találhatjátok.
    </p>

    <p class="film">
        <iframe width="480" height="360" src="http://www.youtube.com/embed/7MwFeHcBTwU?rel=0" frameborder="0" allowfullscreen></iframe>
    </p>

    <p class="film">
        <iframe width="480" height="360" src="http://www.youtube.com/embed/np0EF8nCW1g?rel=0" frameborder="0" allowfullscreen></iframe>
    </p>

    <p class="film">
        <iframe width="480" height="360" src="http://www.youtube.com/embed/UhAC2IkjYhE?rel=0" frameborder="0" allowfullscreen></iframe>
    </p>

    <p class="film">
        <iframe width="480" height="360" src="http://www.youtube.com/embed/1JoKfggZ6ic?rel=0" frameborder="0" allowfullscreen></iframe>
    </p>

</div>

<?php
$page->Footer();
?>
</body>

</html>
