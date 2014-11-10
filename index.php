<?php
include('pages/components/messages.php');
$title =  'Организация праздников, оригинальных поздравлений в Минске. Дед Мороз и Снегурочка на дом.';
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
            <img class="common-image"
                alt="Дед Мороз и Снегурочка на дом в Минске"
                title="Дед Мороз и Снегурочка на дом"
                src="/images/santa_claus_and_snowgirl.png">
        </a>
    </div>
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Не знаете как встретить грядущий Новый Год?
        </h2>
        <span class="block">
            Дед Мороз и Снегурочка из студии ' . MSGapplicationTitleQuotes . ' придут к Вам в гости!
        </span>
        <span class="block">
            <a class="custom-link" href="' . $menuActions[MSGsantaClaus]["link"] . '"
                title="Позвать Деда Мороза и Снегурочку домой в Миснк">' . MSGdetails . '</a>
        </span>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Ищите оригинальное признание в любви?
        </h2>
        <span class="block">
            ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам сделать удивительное признание для своей второй половинки!
        </span>
        <span class="block">
            <a class="custom-link" href="' . $menuActions[MSGoriginalCongratulation]["link"] . '"
                title="Необычное поздравление или признание в любви">' . MSGdetails . '</a>
        </span>
    </div>
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="' . $menuActions[MSGoriginalCongratulation]["link"] . '">
            <img class="common-image"
                alt="Оригинальное признание в любви в городе Минске"
                title="Оригинальное признание в любви в городе Минске"
                src="/images/balloons/balloon_bouquet.png">
        </a>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="' . $menuActions[MSGsantaClaus]["link"] . '">
            <img class="common-image"
                alt="Детский аниматор"
                title="Детский аниматор"
                src="/images/clown.png">
        </a>
    </div>
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Желаете порадовать своего ребенка?
        </h2>
        <span class="block">
            ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' поможет Вам в этом!
        </span>
        <span class="block">
            <a class="custom-link" href="' . $menuActions[MSGsantaClaus]["link"] . '"
                title="Порадуйте своих детей и пригласите на Новый Год Деда Мороза от студии ' . MSGapplicationTitle . ' ">' . MSGdetails . '</a>
        </span>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Хотите весело и необычно отпраздновать важное событие в вашей жизни?
        </h2>
        <span class="block">
            Студия ' . MSGapplicationTitleQuotes . ' наполнит Ваш праздник незабываемыми моментами и неповторимыми эмоциями!
        </span>
        <span class="block">
            <a class="custom-link" href="' . $menuActions[MSGanimatorAndToastmasterAndSoundman]["link"] . '"
                title="Организация забавных и неординарных праздников">' . MSGdetails . '</a>
        </span>
    </div>
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="' . $menuActions[MSGanimatorAndToastmasterAndSoundman]["link"] . '">
            <img class="common-image"
                alt="Веселый и необычный праздник"
                title="Веселый и необычный  праздник"
                src="/images/party.png">
        </a>
    </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-5 large-3 columns text-center">
        <a class="" href="' . $menu[MSGoriginalGifts]["link"] . '">
            <img class="common-image"
                alt="Оригинальные и креативные подарки, Минск"
                title="Оригинальные и креативные подарки, Минск"
                src="/images/gift.png">
        </a>
    </div>
    <div class="small-12 medium-7 large-6 columns text-center">
        <h2 class="custom-main-color">
            Ищите оригинальные и креативные подарки?
        </h2>
        <span class="block">
            ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' нашла их для Вас!
        </span>
        <span class="block">
            <a class="custom-link" href="' . $menu[MSGoriginalGifts]["link"] . '"
                title="Запоминающиеся подарки и сувениры ручной работы от студии ' . MSGapplicationTitle . '">' . MSGdetails . '</a>
        </span>
    </div>
</div>
';
include('pages/components/template.php');
?>