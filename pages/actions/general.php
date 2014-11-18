<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$title = "Организация праздников. Проведение торжеств. Креативные сценарии. Активные поздравления. Минск";
$activeLink=MSGаnimatorsAndToastmaster;
$activeSubLink="";
$headerContent = '
 <h1 class="hidden-header">
    <a class="" href="' . $menuActions[MSGsantaClaus]["link"] . '">
        Профессиональная организация праздников. Оригинальные сценарии. Активные поздравления. Минск!
    </a>
</h1>
';
$content = '
     <div class="row text-center">
        <div class="small-12 medium-12 large-12 columns">
            <h2>
                Организация праздников, проведение торжеств в городе Минске.
            </h2>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <h3>
                <span class="block">
                Наша ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . '
                поможет Вам  грамотно составить сценарий вашего праздника, организует музыкальное сопровождение,
                добавит креативных идей и запоминающихся моментов!
                </span>
                <span class="block">
                Вам будет, что вспомнить!
                </span>
            </h3>
            <p>
                <span class="block">
                    <a class="custom-text-color"
                       href="' . $menuActions[MSGanimatorAndToastmasterAndSoundman]["link"] . '"
                       title="Оригинально поздравить любимого человека">Активные признания в любви!</a>
                </span>
                <span class="block">
                    <a class="custom-text-color"
                       href="' . $menuActions[MSGsantaClaus]["link"] . '"
                       title="Пригласить Деда Мороза в гости">Новогодние поздравления от Деда Мороза и его внучки Снегурочки!</a>
                </span>
                <span class="block">
                    <a class="custom-text-color"
                       href="' . $menuActions[MSGoriginalCongratulation]["link"] . '"
                       title="Проведение торжественных событий для детей и взрослых">Детские аниматоры и харизматичные ведущие!</a>
                </span>
            </p>
            <p class="custom-main-color">
                Все это и многое другое Вы найдете в студии праздников ' . MSGapplicationTitleQuotes . '
            </p>
        </div>
    </div>
';
include($_SERVER['DOCUMENT_ROOT'].'/pages/actions/components/actionsTemplate.php');
?>

