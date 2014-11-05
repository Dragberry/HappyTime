<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$title = 'Купить воздушные шары в Минске';
$activeLink=MSGballoons;
$activeSubLink="";
$content = '
    <div class="row text-center">
        <div class="small-12 medium-12 large-12 columns">
            <h4>
                ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . '
            </h4>
            <h5>
                предлагает Вам огромный выбор воздушных шаров.
            </h5>
            <p>
                Устройте праздник для любимой, удивите любимого, порадуйте своих детей, подарите улыбку родным,
                доставьте удовольствие себе с шарами от студии праздников ' . MSGapplicationTitleQuotes . '.
                А состав студии поможет Вам в этом.
            </p>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <img class="home-image" src="/images/balloons/balloons_common.png">
        </div>
    </div>
';
include($_SERVER['DOCUMENT_ROOT'].'/pages/balloons/components/balloonsTemplate.php');
?>