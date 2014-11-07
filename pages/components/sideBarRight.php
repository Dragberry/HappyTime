<?php
    function getRandomAction($link) {
        $content = '
            <div class="text-center">
                <span class="custom-main-color block">
                ВНИМАНИЕ!
                </span>
                <span class="custom-main-color block">
                АКЦИЯ!
                </span>
                <span class="block">
                При бронировании Деда Мороза
                </span>
                <span class="block">
                до 15 декабря
                </span>
                <span class="block">каждому ребенку подарок!
                </span>
                <a class="" href="' . $link . '">
                    <img class="full-image"
                        alt="Предзаказ Деда Мороза и Снегурочки на дом в Минск"
                        title="Предзаказ Деда Мороза и Снегурочки на дом в Минск"
                        src="/images/promotions/gift.png">
                </a>
            </div>
        ';
        return $content;
    }
?>

<!--
<div>
    <div id="mainCalendar"></div>
</div>
<br />
-->
<div>
    <?php echo(getRandomAction($menuActions[MSGsantaClaus]["link"])); ?>
</div>
<div>
    <p class="text-center" style="font-size: small">
        <span class="custom-main-color text-center block">
        Звоните нам:
        </span>
        <span class="block">
        <img style="width: 16px; height: 16px" src="/images/tools/velcom.png">
        <?php echo MSGvelcomPhone; ?>
        </span>
        <span class="block">
        <img style="width: 16px; height: 16px" class="full-image" src="/images/tools/mts.png">
        <?php echo MSGmtsPhone; ?>
        </span>
    </p>
</div>
