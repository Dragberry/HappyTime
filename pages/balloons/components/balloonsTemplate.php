<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
//$sideBarLeft="/pages/balloons/components/balloonsMenu.php";
if (!$title)
{
    $title='Купить воздушные шары в Миснке';
}
if (!$content)
{
    $content='
    <div class="small-12 text-center">
        <h2 class="custom-main-color">
            Открытие интернет-магазина воздушных шаров состоится 15 января.
        </h2>
        <p class="custom-text-color">
            Приглашаем за покупками!
        </p>
    </div>
    ';
}
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/template.php');
?>