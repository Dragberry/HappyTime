<?php
    function getRandomAction($link) {
        $content = '
            <div class="text-center">
                ВНИМАНИЕ!
                <br />
                АКЦИЯ!
                <br />
                При бронировании Деда Мороза до 15 ноября каждому ребенку подарок!
                <a class="" href="' . $link . '">
                    <img class="full-image" src="/images/promotions/gift.png">
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
    <?php echo(getRandomAction($menuActions[MSGsantaClaus]["link"])); ?>
</div>