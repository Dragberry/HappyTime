<?php
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
