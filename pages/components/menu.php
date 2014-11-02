<?php
$menuBalloons = array(
    MSGlightBalloons => array("link" => "/pages/balloons/light.php", visibility => true),
    MSGroundBalloons => array("link" => "/pages/balloons/round.php", visibility => true),
    MSGmodellingBalloons => array("link" => "/pages/balloons/modelling.php", visibility => true),
    MSGbouquetBalloons => array("link" => "/pages/balloons/bouquet.php", visibility => true),
    MSGlettersBalloons => array("link" => "/pages/balloons/letters.php", visibility => true),
    MSGweddingBalloons => array("link" => "/pages/balloons/wedding.php", visibility => true),
    MSGinscriptionBalloons => array("link" => "/pages/balloons/inscription.php", visibility => true),
    MSGheliumBalloons => array("link" => "/pages/balloons/helium.php", visibility => true)
);

$menuOriginalGifts = array();

$menuAccessories = array(
    MSGaccessoriesForWedding => array("link" => "/pages/accessories/wedding.php", visibility => true),
    MSGaccessoriesForBirthday => array("link" => "/pages/accessories/birthday.php", visibility => true),
    MSGaccessoriesForNewYear => array("link" => "/pages/accessories/newYear.php", visibility => true),
    MSGallAccessories => array("link" => "/pages/accessories/all.php", visibility => true)
);

$menuActions = array(
    MSGsantaClaus => array("link" => "/pages/actions/santaClaus.php",  visibility => true),
    MSGoriginalCongratulation => array("link" => "/pages/actions/originalCongratulation.php",  visibility => false)
);

$menu = array(
    MSGballoons => array("subMenu" => $menuBalloons, "link" => "/pages/balloons/general.php", visibility => true),
    MSGoriginalGifts => array("subMenu" => $menuOriginalGifts, "link" => "/pages/originalGifts/general.php", visibility => false),
    MSGholidayAccessories => array("subMenu" => $menuAccessories, "link" => "/pages/accessories/general.php", visibility => false),
    MSGаnimatorsAndToastmaster => array("subMenu" => $menuActions, "link" => "/pages/actions/general.php", visibility => true)
);

$menuAdditional = array(
    MSGpromotions => array("subMenu" => array(), "link" => "/pages/promotions.php", visibility => true),
    MSGaboutUs => array("subMenu" => array(), "link" => "/pages/about.php", visibility => true),
    MSGorderAndDelivery => array("subMenu" => array(), "link" => "/pages/orderAndDelivery.php", visibility => true)
);

function printMenu(&$menu, $activeLink)
{
    foreach ($menu as $key => $value) {
        if ($value["visibility"] == true)
            if (strcmp($activeLink, $key) == 0) {
                echo('<li class="active"><a href=' . $value["link"] . '>' . $key . '</a></li>');
            } else {
                echo('<li><a href=' . $value["link"] . '>' . $key . '</a></li>');
            }
    }
}

function printTitledMenu(&$menu, $header, $activeLink)
{
    echo('<ul class="side-nav">');
    echo('<li class="heading">' . $header . '</li>');
    printMenu($menu, $activeLink);
    echo('</ul>');
}

function printHeaderMenuItem($menu, $header, $isActive, $link, $activeSubLink)
{
    $active = $isActive ? " active" : "";
    $hasDropdown = $menu ? "has-dropdown" : "";
    echo('<li class="'. $hasDropdown . $active .'">');
    echo('<a href="' . $link .'">' . $header . '</a>');
    if ($menu) {
        echo('<ul class="dropdown">');
        printMenu($menu, $activeSubLink);
        echo('</ul>');
    }
    echo('</li>');
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
        if ($value["visibility"] == true) {
            printHeaderMenuItem($value["subMenu"], $key, $isActive, $value["link"], $activeSubLink);
        }
    }
}
