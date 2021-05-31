<?php

// AbstractPage
abstract class AbstractPage
{
    // Properties
    protected $Main_title;
    protected $Page_title;
    protected $Charset;

    // Class constructor
    function __construct($main_title, $page_title)
    {
        $this->Main_title = $main_title;
        $this->Page_title = $page_title;
        $this->Charset = "utf-8";
    }

    // Getter and setter functions
    function getMainTitle()
    {
        return $this->Main_title;
    }

    function setMainTitle($value)
    {
        $this->Main_title = $value;
    }

    function getPageTitle()
    {
        return $this->Page_title;
    }

    function setPageTitle($value)
    {
        $this->Page_title = $value;
    }

    function getCharset()
    {
        return $this->Charset;
    }

    function setCharset($value)
    {
        $this->Charset = $value;
    }

    // HTML functions
    function HTMLTitle()
    {
        $title = "<title>";
        $title .= $this->Main_title . " - " . $this->Page_title;
        $title .= "</title>\n";

        return $title;
    }

    function HTMLCharset()
    {
        return "<meta charset=\"" . $this->Charset . "\">\n";
    }

    // Abstract functions
    abstract function HTMLStyleSheets();
    abstract function Header();
    abstract function Menu();
    abstract function Footer();
}
?>
