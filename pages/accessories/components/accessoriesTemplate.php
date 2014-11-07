<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$sideBarLeft="/pages/accessories/components/accessoriesMenu.php";
$title=MSGalterApplicationTitle;
if (!$content)
{
    $content='
    <div class="small-12 text-center">
        <h2 class="custom-main-color">
            Открытие интернет-магазина праздничных аксессуаров состоится 10 декабря.
        </h2>
        <p class="custom-text-color">
            Приглашаем за покупками! У нас вы найдете множество креативных и оригинальных подарков и аксессуаров к грядущему Новому Году!
        </p>
    </div>
    ';
}
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/template.php');
?>