<?php
$cfg = [];

$cfg["debug"] = true;

//templates
$cfg["debugErrorPage"] = "DebugError.html";
$cfg["mainPageTemplate"] = "index.html";
$cfg["maintanceTemplate"] = "maintance.html";
$cfg["PageNotFoundTemplate"] = "404.html";

$cfg["contentFolder"] = "content";
$cfg["uploadsFolder"] = $cfg["contentFolder"]."/uploads";
$cfg["templateFolder"] = "template";
$cfg["defaultContentType"] = "text/html";
$cfg["templateFlag"] = "/%!([A-Z]+)!%/";
$cfg["pageKey"] = "p";
$cfg["mainPage"] = "index";

//flags
$cfg["defaultContentFlag"] = "CONTENT";
$cfg["defaultNavFlag"] = "NAV";
$cfg["defaultFooterFlag"] = "FOOTER";

//Database
$cfg["db"]["hostname"] = "localhost";
$cfg["db"]["username"] = "webpage";
$cfg["db"]["pass"] = "";
$cfg["db"]["db"] = "";
$cfg["db"]["port"] = "3306";