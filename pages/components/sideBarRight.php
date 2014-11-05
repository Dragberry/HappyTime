<?php
    function getRandomAction($link) {
        $content = '
            <div class="text-center">
                <span class="custom-main-color" style="display: block">
                ВНИМАНИЕ!
                </span>
                <span class="custom-main-color" style="display: block">
                АКЦИЯ!
                </span>
                <span style="display: block">
                При бронировании Деда Мороза до 15 ноября каждому ребенку подарок!
                </span>
                <a class="" href="' . $link . '">
                    <img class="full-image"
                        alt="Вызвать Деда Мороза и Снегурочку на дом в Минск"
                        title="Вызвать Деда Мороза и Снегурочку на дом в Минск"
                        src="/images/promotions/gift.png">
                </a>
            </div>
        ';
        return $content;
    }
?>


<div>
    <div id="mainCalendar"></div>
</div>
<br />
<div>
    <p class="text-center" style="font-size: small">
        <span class="custom-main-color text-center" style="display: block">
        Звоните нам:
        </span>
        <span style="display: block">
        <img style="width: 16px; height: 16px" src="/images/tools/velcom.png">
        <?php echo MSGvelcomPhone; ?>
        </span>
        <span style="display: block">
        <img style="width: 16px; height: 16px" class="full-image" src="/images/tools/mts.png">
        <?php echo MSGmtsPhone; ?>
        </span>
    </p>
</div>
<div>
    <?php echo(getRandomAction($menuActions[MSGsantaClaus]["link"])); ?>
</div>