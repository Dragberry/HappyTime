<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$title='Оригинальные признания в любви и поздравления в виде приключения по Минску';
$metaDescription = '
    Желаете сделать незабываем день рождения дорогого Вам человека?
    Или выразить Вши чувства любимому человеку в креативной форме?
    Студия праздников ' . MSGapplicationTitleQuotes . ' поможет Вам организовать незыбваемое поздравление в виде приключения!';
$activeLink=MSGаnimatorsAndToastmaster;
$activeSubLink=MSGoriginalCongratulation;
$headerContent = '
 <h1 class="hidden-header">
    <a class="" href="' . $menuActions[MSGoriginalCongratulation]["link"] . '">
        Организация креативных поздравлений и признаний в любви.
    </a>
</h1>
';
$content = '
    <div class="row text-center">
        <div class="small-12 medium-12 large-12 columns">
            <h2 class="custom-main-color">
                <span style="display: block">
                ОРИГИНАЛЬНОЕ КВЕСТ-ПОЗДРАВЛЕНИЕ
                </span>
                <span style="display: block">
                или
                </span>
                <span style="display: block">
                КВЕСТ-ПРИЗНАНИЕ В ЛЮБВИ
                </span>
            </h2>

        </div>
        <div class="small-12 medium-12 large-12 columns">
            <h3>
                <span style="display: block">
                ВЫ ХОТИТЕ, ЧТОБЫ ПРОЦЕСС ПРЕПОДНЕСЕНИЯ ПОДАРКА УДИВИЛ ИМЕНИННИКА?
                </span>
                <span style="display: block">
                ИЩИТЕ ЧТО-ТО НЕОБЫЧНОЕ ДЛЯ ПРИЗНАНИЯ В ЛЮБВИ?
                </span>
                <span style="display: block">
                ПОЗДРАВЛЯЮ! ВЫ НАШЛИ, ЧТО ИСКАЛИ!
                </span>
            </h3>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <img class="home-image"
                alt="Необычное поздравление в виде квеста"
                src="/images/actions/gift_map.png">
            <p>
                Наверное, каждый человек хотел бы получить поздравление в форме квеста или приключения. Суть данного поздравления заключается в следующем:
                человек, которого мы поздравляем (или которого ждет романтическое и необычное признание в любви) попадает в увлекательную поэтапную игру с заданиями, пикетами и тайными загадками.
                В результате прохождения такого квеста игрока обязательно ждет удивительный подарок или оригинальное признание в любви, воздушные шары и много много счастья.
                Данная игра может проходить под различными тематиками.
                ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам полностью в выборе тематики игры, разработке карт, испытаний, пикетов, составит маршрут и маршрутные листы и организует все задуманное Вами.
            </p>
        </div>
        <div class="small-12 medium-12 large-12 center columns">
            <h5>' . MSGprice . '</h5>
        </div>
        <div class="show-for-medium-up medium-1 large-2 columns">
            <br />
        </div>
        <div class="small-12 medium-10 large-8 price-panel columns">
            <h2>Поздравление в виде приключения по городу Минску</h2>
            <span style="display: block">
            40 минут - 5-6 тайных мест - 300.000 рублей
            </span>
            <span style="display: block">
            1,5 часа - 10 тайных мест - 500.000 рублей
            </span>
        </div>
        <div class="show-for-medium-up medium-1 large-2 columns">
            <br />
        </div>
    </div>
';
include($_SERVER['DOCUMENT_ROOT'].'/pages/actions/components/actionsTemplate.php');
?>