<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$title='Оригинальные признания в любви и поздравления в Минске';
$activeLink=MSGаnimatorsAndToastmaster;
$activeSubLink=MSGoriginalCongratulation;
$content = '
    <div class="row text-center">
        <div class="small-12 medium-12 large-12 columns">
            <h1>
                <span style="display: block">
                ОРИГИНАЛЬНОЕ КВЕСТ-ПОЗДРАВЛЕНИЕ
                </span>
                <span style="display: block">
                или
                </span>
                <span style="display: block">
                КВЕСТ-ПРИЗНАНИЕ В ЛЮБВИ
                </span>
            </h1>

        </div>
        <div class="small-12 medium-12 large-12 columns">
            <h2>
                <span style="display: block">
                ВЫ ХОТИТЕ, ЧТОБЫ ПРОЦЕСС ПРЕПОДНЕСЕНИЯ ПОДАРКА УДИВИЛ ИМЕНИННИКА?
                </span>
                <span style="display: block">
                ИЩИТЕ ЧТО-ТО НЕОБЫЧНОЕ ДЛЯ ПРИЗНАНИЯ В ЛЮБВИ?
                </span>
                <span style="display: block">
                ПОЗДРАВЛЯЮ! ВЫ НАШЛИ, ЧТО ИСКАЛИ!
                </span>
            </h2>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <p>
                Наверное, каждый человек хотел бы получить поздравление в форме квеста или приключения. Суть данного поздравления заключается в следующем:
                человек, которого мы поздравляем (или которого ждет романтическое и необычное признание в любви) попадает в увлекательную поэтапную игру с заданиями, пикетами и тайными загадками.
                В результате прохождения такого квеста игрока обязательно ждет удивительный подарок или оригинальное признание в любви, воздушные шары и много много счастья.
                Данная игра может проходить под различными тематиками.
                ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам полностью в выборе тематики игры, разработке карт, испытаний, пикетов, составит маршрут и маршрутные листы и организует все задуманное Вами.
            </p>
            <img class="home-image" src="/images/actions/gift_map.png">
        </div>
    </div>
';
include($_SERVER['DOCUMENT_ROOT'].'/pages/actions/components/actionsTemplate.php');
?>