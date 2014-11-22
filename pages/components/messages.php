<?php
// general
define("MSGapplicationTitle", "HappyTime");
define("MSGapplicationTitleQuotes", "\"" . MSGapplicationTitle . "\"");
define("MSGalterApplicationTitle", "Студия праздников");
define("MSGemail", "mail@happytime.by");
define("MSGurl", "HappyTime.by");
define("MSGprice", "Цены:");
define("MSGdetails", "Подробнее...");

// header
define("MSGslogan", "Счастливый праздник - в любое время");
define("MSGmenu", "Меню");
define("MSGparts", "Разделы");
define("MSGmainPage", "Главная");
define("MSGballoons", "Воздушные шары");
define("MSGoriginalGifts", "Оригинальные подарки");
define("MSGholidayAccessories", "Аксессуары к празднику");
define("MSGаnimatorsAndToastmaster", "Организация праздников");
define("MSGentertainments", "Развлечения");
define("MSGpromotions", "Акции и скидки");
define("MSGaboutUs", "О нас");
define("MSGorderAndDelivery", "Заказ и доставка");
define("MSGsiteSearch", "Поиск по сайту");
define("MSGsearch", "Поиск");
define("MSGsearchResult", "Результаты поиска");
// Footer and left sidebar
define("MSGcopyrights", "Все права защищены.");
define("MSGthanksForChoosing", "Спасибо, что выбрали нас!");
define("MSGgoodLuck", "Счастья вам!");
define("MSGvelcom", "Велком:");
define("MSGmts", "МТС:");
define("MSGvelcomPhone", "8 (044) 711-710-4");
define("MSGmtsPhone", "8 (033) 664-29-83");
define("MSGscheduleTitle", "Режим работы:");
define("MSGworkTime", "09.00-22.00");
define("MSGschedule", "ежедневно с 09.00 до 22.00");
define("MSGwithoutWeekEnd", "Без выходных");
define("MSGcontacts", "Контакты:");
define("MSGfreeDelivery", "Бесплатная доставка");

// Balloons
define("MSGlightBalloons", "Светящиеся шары");
define("MSGroundBalloons", "Круглые");
define("MSGmodellingBalloons", "Для моделирования");
define("MSGbouquetBalloons", "Букет из шаров");
define("MSGlettersBalloons", "Буквы и слова из шаров");
define("MSGweddingBalloons", "Свадебные шары");
define("MSGinscriptionBalloons", "С надписью");
define("MSGheliumBalloons", "Шары с гелием");

// Accessories
define("MSGaccessoriesForWedding", "Аксессуары для свадьбы");
define("MSGaccessoriesForBirthday", "Для дня рождения и юбилея");
define("MSGaccessoriesForNewYear", "Для Нового Года");
define("MSGallAccessories", "Все аксессуары");

// Animators and Toastmaster
define("MSGsantaClaus", "Дед Мороз и Снегурочка");
define("MSGoriginalCongratulation", "Оригинальное поздравление и признание в любви");
define("MSGanimatorAndToastmasterAndSoundman", "Аниматор, тамада и звукорежиссер");

// Promotions
define("MSGactions", "Акции");
define("MSGdiscountCards", "Скидочные карты");
define("MSGgiftCertificates", "Подарочные сертификаты");

//Search Result
define("MSGoffer", "Услуга/Товар");
define("MSGofferTitle", "Название");
define("MSGofferDescription", "Краткое описание");
define("MSGofferCost", "Стоимость");
define("MSGdoOrder", "Заказать");

// Left menu
$menuBalloons = array(
    MSGlightBalloons => array("link" => "/pages/balloons/light.php", visibility => true),
    MSGroundBalloons => array("link" => "/pages/balloons/round.php", visibility => true),
    MSGmodellingBalloons => array("link" => "/pages/balloons/modelling.php", visibility => true),
    MSGbouquetBalloons => array("link" => "/pages/balloons/bouquet.php", visibility => true),
    MSGlettersBalloons => array("link" => "/pages/balloons/letters.php", visibility => true),
    MSGweddingBalloons => array("link" => "/pages/balloons/wedding.php", visibility => true),
    MSGinscriptionBalloons => array("link" => "/pages/balloons/inscription.php", visibility => true),
    MSGheliumBalloons => array("link" => "/pages/balloons/helium.php", visibility => true)
);

$menuOriginalGifts = array();

$menuAccessories = array(
    MSGaccessoriesForWedding => array("link" => "/pages/accessories/wedding.php", visibility => true),
    MSGaccessoriesForBirthday => array("link" => "/pages/accessories/birthday.php", visibility => true),
    MSGaccessoriesForNewYear => array("link" => "/pages/accessories/newYear.php", visibility => true),
    MSGallAccessories => array("link" => "/pages/accessories/all.php", visibility => true)
);

$menuActions = array(
    MSGanimatorAndToastmasterAndSoundman => array("link" => "/pages/actions/party.php",  visibility => true),
    MSGsantaClaus => array("link" => "/pages/actions/santaClaus.php",  visibility => true),
    MSGoriginalCongratulation => array("link" => "/pages/actions/originalCongratulation.php",  visibility => true)

);

$menu = array(
    MSGballoons => array("subMenu" => $menuBalloons, "link" => "/pages/balloons/general.php", visibility => true),
    MSGoriginalGifts => array("subMenu" => $menuOriginalGifts, "link" => "/pages/originalGifts/general.php", visibility => true),
    MSGholidayAccessories => array("subMenu" => $menuAccessories, "link" => "/pages/accessories/general.php", visibility => true),
    MSGаnimatorsAndToastmaster => array("subMenu" => $menuActions, "link" => "/pages/actions/general.php", visibility => true)
);
// Right menu
$menuPromotions = array(
    MSGactions => array("link" => "/pages/promotions/actions.php", visibility => true),
    MSGdiscountCards => array("link" => "/pages/promotions/discountCards.php", visibility => true),
    MSGgiftCertificates => array("link" => "/pages/promotions/giftCertificates.php", visibility => true)
);

$menuAdditional = array(
    MSGpromotions => array("subMenu" => $menuPromotions, "link" => "/pages/promotions/actions.php", visibility => true),
    MSGaboutUs => array("subMenu" => array(), "link" => "/pages/about.php", visibility => true),
    MSGorderAndDelivery => array("subMenu" => array(), "link" => "/pages/orderAndDelivery.php", visibility => true)
);
?>