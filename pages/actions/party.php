<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$title = 'Профессиональная помощь в организации праздников и торжеств. Тамада, аниматор, звукорежиссер.';
$activeLink=MSGаnimatorsAndToastmaster;
$activeSubLink=MSGanimatorAndToastmasterAndSoundman;
$content = '
    <div class="row text-center">
        <div class="small-12 medium-12 large-12 columns">
            <h1>
                Хотите сделать Ваш праздник незабываемым, веселым и полным радостных эмоций?
            </h1>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <h2>
                ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . '
                предлагает Вам услуги тамады, звукорежиссера и аниматора.
            </h2>
        </div>
        <div class="small-6 medium-6 large-6 columns">
            <img class="common-image"
                alt="Организация праздников, торжеств в Минске"
                title="Организация праздников, торжеств в Минске"
                src="/images/actions/microphone.png">
        </div>
        <div class="small-6 medium-6 large-6 columns">
            <img class="common-image"
                alt="Заказать тамаду на праздник, Минск"
                title="Заказать тамаду на праздник, Минск"
                src="/images/actions/party_song.png">
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <p>
                <span class="block">Близится день рождения  дорогого Вам человека, а обычные посиделки за столом Вам уже осточертели?</span>
                <span class="block">Или, быть может, необходимо отметить важное рабочее событие, а из идей только  пиво да шашлык?</span>
                <span class="block">Кто-то решил жениться, и требуется срочно разукрасить это важнейшее жизненное событие музыкой, шутками и весельем?</span>
            </p>
            <p class="custom-main-color">Мы знаем, что Вам нужно!</p>
            <p>
                <span class="block">Зажигательные, находчивые, энергичные и интеллигентные ведущие, артистичные и веселые аниматоры,
                забавные конкурсы, шуточные игры, юмористические миниатюры, танцы, песни с живым исполнением.</span>
                <span class="block">Все это организует для Вашего праздника ' .MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . ' по самым демократичным ценам!</span>
            </p>
        </div>
        <hr />
        <div class="show-for-medium-up medium-2 large-3 columns">
            <br />
        </div>
        <div class="small-12 medium-8 large-6 price-panel columns">
            <h2><span class="block"  title="Сколько стоит заказать тамаду на свадьбу">Тамада</span>
                <span class="block">(ведущие торжеств, живое исполнение песен)</span>
            </h2>
                <span class="block">
                2 часа - 600.000 рублей
                </span>
                <span class="block">
                4 часа - 800.000 рублей
                </span>
                <span class="block">
                8 часов - 1000.000 рублей
                </span>
        </div>
        <div class="show-for-medium-up medium-2 large-3 columns">
            <br />
        </div>
        <div class="small-12 medium-12 large-12 columns">
           <button class="getAction" title="Заказать тамаду на свадьбу">Заказать</button>
        </div>
        <hr />
        <div class="show-for-medium-up medium-2 large-3 columns">
            <br />
        </div>
        <div class="small-12 medium-8 large-6 price-panel columns">
            <h2><span class="block"  title="Узнать цену на звукорежиссера">Звукорежиссер</span>
            </h2>
                <span class="block">
                2 часа - 400.000 рублей
                </span>
                <span class="block">
                4 часа - 600.000 рублей
                </span>
                <span class="block">
                8 часов - 800.000 рублей
                </span>
        </div>
        <div class="show-for-medium-up medium-2 large-3 columns">
            <br />
        </div>
        <div class="small-12 medium-12 large-12 columns">
           <button class="getAction" title="Заказать музыкальное сопровождение к празднику">Заказать</button>
        </div>
        <hr />
        <div class="show-for-medium-up medium-2 large-3 columns">
            <br />
        </div>
        <div class="small-12 medium-8 large-6 price-panel columns" title="Сколько стоит заказать аниматора на детский праздник">
            <h2><span class="block">Детский аниматор</span>
            </h2>
                <span class="block">
                2 часа - 600.000 рублей
                </span>
                <span class="block">
                4 часа - 800.000 рублей
                </span>
                <span class="block">
                8 часов - 1000.000 рублей
                </span>
        </div>
        <div class="show-for-medium-up medium-2 large-3 columns">
            <br />
        </div>
        <div class="small-12 medium-12 large-12 columns">
           <button class="getAction" title="Заказать аниматора для детей">Заказать</button>
        </div>
        <hr />
        <div class="small-12 medium-12 large-12 columns">
            <img class=""
                alt="Помощь в орагнизации праздников, Минск"
                title="Помощь в орагнизации праздников, Минск"
                src="/images/actions/big_party.png">
        </div>
    </div>
    <div id="actionDialog">
        <div class="row text-center">
            <span>Чтобы заказать тамаду, звукорежиссера или детского аниматора на свой праздник или семейное торжество, позвоните нам по телефонам:</span>
            <span class="block">
            <img style="width: 16px; height: 16px" src="/images/tools/velcom.png">
            ' . MSGvelcomPhone . '
            </span>
            <span class="block">
            <img style="width: 16px; height: 16px" class="full-image" src="/images/tools/mts.png">
            ' . MSGmtsPhone . '
            </span>
            <span class="block">
            Или пришлите письмо на нашу электронную почту
            </span>
            <span class="block custom-main-color"><b>
            ' . MSGemail . '
            </b></span>
            <span class="block">
            с указанием имени и номера вашего контактного телефона.
            </span>
        </div>
    </div>
';
include($_SERVER['DOCUMENT_ROOT'].'/pages/actions/components/actionsTemplate.php');
?>