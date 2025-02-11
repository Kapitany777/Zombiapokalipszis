<?php
include_once("include/inc_abstractpage.php");

class Page extends AbstractPage
{
    // Class constructor
    function __construct($main_title, $page_title)
    {
        parent::__construct($main_title, $page_title);
    }

    // Functions
    function HTMLStyleSheets()
    {
        return "<link rel=\"stylesheet\" href=\"felulet/main.css\" type=\"text/css\" />\n";
    }

    function Header()
    {
        print("<div id=\"header\">\n");
        print("<img src=\"images/header.png\" alt=\"Header\" width=\"500\" height=\"125\" />\n");
        print("</div>\n");
    }

    function Menu()
    {
        print("<div id=\"menu\">\n");
        print("<a href=\"index.php\">Bevezető</a>\n");
        print("<a href=\"kotet1.php\">I.kötet</a>\n");
        print("<a href=\"kotet2.php\">II.kötet</a>\n");
        print("<a href=\"grafika.php\">Illusztrációk</a>\n");
        print("<a href=\"filmek.php\">Filmek</a>\n");
        print("<a href=\"sajto.php\">Rólunk írták</a>\n");
        print("</div>\n");
    }

    function Footer()
    {
        print("<div id=\"footer\">\n");
        print("&copy; 2001-2025 <a href=\"https://www.lidercfeny.hu/\" target=\"_blank\">Lidércfény Online Kulturális Magazin</a>\n");
        print("</div>\n");
    }
}

?>
