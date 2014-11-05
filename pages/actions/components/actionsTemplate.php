<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$sideBarLeft="/pages/actions/components/actionsMenu.php";
if (!$title)
{
    $title=MSGalterApplicationTitle;
}
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/template.php');
?>