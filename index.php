<?php
include('pages/components/messages.php');
$title =  'Организация праздников, оригинальных поздравлений в Миснке. Магазин сувениров ручной работы';
$content = '
<div class="row">
    <div class="small-12 medium-12 large-12 columns">

    </div>
</div>
<div class="row">
    <div class="small-12 medium-12 large-12 columns">
        <h1 class="text-center">
            <span style="display: block">ДОБРО ПОЖАЛОВАТЬ В СТУДИЮ ПРАЗДНИКОВ</span>
            <span style="display: block">' . MSGapplicationTitleQuotes . '</span>
        </h1>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="/pages/actions/santaClaus.php">
            <img class="full-image"
                alt="Дед Мороз и Снегурочка на дом в Минске"
                title="Дед Мороз и Снегурочка на дом"
                src="/images/santa_claus_and_snowgirl.png">
        </a>
    </div>
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Не знаете как встретить грядущий Новый Год?
        </h2>
        Дед Мороз и Снегурочка из студии ' . MSGapplicationTitleQuotes . ' придут к Вам в гости !
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Ищите оригинальное признание в любви?
        </h2>
        ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам сделать удивительное признание для своей второй половинки!
    </div>
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="/pages/actions/originalCongratulation.php">
            <img class="full-image"
                alt="Оригинальное признание в любви"
                title="Оригинальное признание в любви"
                src="/images/balloons/balloon_bouquet.png">
        </a>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="/pages/actions/santaClaus.php">
            <img class="full-image"
                alt="Детский аниматор"
                title="Детский аниматор"
                src="/images/clown.png">
        </a>
    </div>
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Желаете порадовать своего ребенка?
        </h2>
        ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам в этом!
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Хотите весело и необычно отпраздновать важное событие в вашей жизни?
        </h2>
        Студия ' . MSGapplicationTitleQuotes . ' наполнит Ваш праздник незабываемыми моментами и неповторимыми эмоциями!
    </div>
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="/pages/actions/party.php">
            <img class="full-image"
                alt="Веселый и необычный праздник"
                title="Веселый и необычный  праздник"
                src="/images/party.png">
        </a>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="/pages/originalGifts/general.php">
            <img class="full-image"
                alt="Оригинальные и креативные подарки, Минск"
                title="Оригинальные и креативные подарки, Минск"
                src="/images/gift.png">
        </a>
    </div>
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Ищите оригинальные и креативные подарки?
        </h2>
        ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' нашла их для Вас!
    </div>
</div>
';
include('pages/components/template.php');
?>