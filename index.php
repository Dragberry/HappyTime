<?php
include('pages/components/messages.php');
$title = MSGholidayStudio;
$content = '
<div class="row">
    <div class="small-12 medium-12 large-12 columns">

    </div>
    <div class="small-12 medium-12 large-12 columns text-center">
        <h3>
            ДОБРО ПОЖАЛОВАТЬ В СТУДИЮ ПРАЗДНИКОВ
            <br>
            ' . MSGapplicationTitleQuotes . '
        </h3>
    </div>
    <div class="small-12">
        <div class="small-12 medium-7 large-9 columns">
            Ищите оригинальное признание в любви?
            ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам сделать удивительное признание для своей второй половинки!
        </div>
        <div class="small-12 medium-5 large-3 columns">
            <a class="th" href="">
                <img class="search-image" src="/images/balloons/balloon_bouquet.png">
            </a>
        </div>
    </div>
</div>
';
include('pages/components/template.php');
?>