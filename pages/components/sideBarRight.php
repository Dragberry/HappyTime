<?php
    function getRandomAction() {
        $content = '
            <div class="text-center">
                ВНИМАНИЕ!
                <br />
                АКЦИЯ!
                <br />
                Закажи подарки на сумму свыше 100.000 рублей и получи MP3-плеер в подарок!
                <img class="full-image" src="/images/actions/player_mp3.png">
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
    <?php echo(getRandomAction()); ?>
</div>