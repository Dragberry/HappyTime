<?php
$menuBalloons = array(
    MSGlightBalloons => "/pages/balloons/light.php",
    MSGroundBalloons => "/pages/balloons/round.php",
    MSGmodellingBalloons => "/pages/balloons/modelling.php",
    MSGbouquetBalloons => "/pages/balloons/bouquet.php",
    MSGlettersBalloons => "/pages/balloons/letters.php",
    MSGweddingBalloons => "/pages/balloons/wedding.php",
    MSGinscriptionBalloons => "/pages/balloons/inscription.php",
    MSGheliumBalloons => "/pages/balloons/helium.php"
);

$menuOriginalGifts = array();

$menuAccessories = array(
    MSGaccessoriesForWedding => "/pages/accessories/wedding.php",
    MSGaccessoriesForBirthday => "/pages/accessories/birthday.php",
    MSGaccessoriesForNewYear => "/pages/accessories/newYear.php",
    MSGallAccessories => "/pages/accessories/all.php"
);

$menuActions = array(
    MSGsantaClaus => "/pages/actions/santaClaus.php",
    MSGoriginalCongratulation => "/pages/actions/originalCongratulation.php"
);

$menu = array(
    MSGballoons => array("subMenu" => $menuBalloons, "link" => "/pages/balloons/general.php"),
    MSGoriginalGifts => array("subMenu" => $menuOriginalGifts, "link" => "/pages/originalGifts/general.php"),
    MSGholidayAccessories => array("subMenu" => $menuAccessories, "link" => "/pages/accessories/general.php"),
    MSGаnimatorsAndToastmaster => array("subMenu" => $menuActions, "link" => "/pages/actions/general.php")
);

$menuAdditional = array(
    MSGaboutUs => array("subMenu" => array(), "link" => "/pages/about.php"),
    MSGorderAndDelivery => array("subMenu" => array(), "link" => "/pages/orderAndDelivery.php")
);

function printMenu(&$menu, $activeLink)
{
    foreach ($menu as $key => $value) {
        if (strcmp($activeLink, $key) == 0) {
            echo("<li class=\"active\"><a href=\"$value\">$key</a></li>");
        } else {
            echo("<li><a href=\"$value\">$key</a></li>");
        }
    }
}

function printTitledMenu(&$menu, $header, $activeLink)
{
    echo("<li class=\"heading\">$header</li>");
    printMenu($menu, $activeLink);
}

function printHeaderMenuItem($menu, $header, $isActive, $link, $activeSubLink)
{
    $active = $isActive ? " active" : "";
    echo("<li class=\"has-dropdown $active\">");
    echo("<a href=\"$link\">$header</a>");
    if ($menu) {
        echo("<ul class=\"dropdown\">");
        printMenu($menu, $activeSubLink);
        echo("</ul>");
    }
    echo("</li>");
}

function printHeaderMenu($menu, $activeLink, $activeSubLink)
{
    $isActive = false;
    foreach ($menu as $key => $value) {
        if (strcmp($activeLink, $key) == 0) {
            $isActive = true;
        } else {
            $isActive = false;
        }
        printHeaderMenuItem($value["subMenu"], $key, $isActive, $value["link"], $activeSubLink);
    }
}
