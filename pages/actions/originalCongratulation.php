<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$activeLink=MSGаnimatorsAndToastmaster;
$activeSubLink=MSGoriginalCongratulation;
$content = '
    <div class="row text-center">
        <div class="small-12 medium-12 large-12 columns">
            <h4>
                ВЫ ХОТИТЕ, ЧТОБЫ ПРОЦЕСС ПРЕПОДНЕСЕНИЯ ПОДАРКА УДИВИЛ ИМЕНИННИКА?
            </h4>
            <h4>
                ИЩИТЕ ЧТО-ТО НЕОБЫЧНОЕ ДЛЯ ПРИЗНАНИЯ В ЛЮБВИ?
            </h4>
            <h4>
                ПОЗДРАВЛЯЮ! ВЫ НАШЛИ, ЧТО ИСКАЛИ!
            </h4>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <h4>
                КВЕСТ-ПОЗДРАВЛЕНИЕ
            </h4>
            <h4>
                или
            </h4>
            <h4>
                КВЕСТ-ПРИЗНАНИЕ В ЛЮБВИ
            </h4>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <p>
                Наверно каждый человек хотел бы получить поздравление в форме квеста или приключения. Суть данного поздравления заключается в следующем:
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