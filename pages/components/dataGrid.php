<?php
$data = array(

    MSGballoons => array("subMenu" => $menuBalloons, "link" => "/pages/balloons/general.php"),
    MSGoriginalGifts => array("subMenu" => $menuOriginalGifts, "link" => "/pages/originalGifts/general.php"),
    MSGholidayAccessories => array("subMenu" => $menuAccessories, "link" => "/pages/accessories/general.php"),
    MSGаnimatorsAndToastmaster => array("subMenu" => $menuActions, "link" => "/pages/actions/general.php"),
    'MSGballoons' => array("subMenu" => $menuBalloons, "link" => "/pages/balloons/general.php"),
    'MSGoriginalGifts' => array("subMenu" => $menuOriginalGifts, "link" => "/pages/originalGifts/general.php"),
    'MSGholidayAccessories' => array("subMenu" => $menuAccessories, "link" => "/pages/accessories/general.php"),
   'MSGаnimatorsAndToastmaster' => array("subMenu" => $menuActions, "link" => "/pages/actions/general.php"),
);

?>


<div class="row" data-equalizer>



        <?php
        foreach ($data as $key => $value)
        {
            echo("<div class=\"small-12 medium-6 large-4 columns panel \" data-equalizer-watch>");
            echo("$key");
            echo($value["link"]);
            echo("</div>");
        }
        ?>

</div>