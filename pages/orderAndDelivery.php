<?php
include('components/messages.php');
$title = MSGorderAndDelivery;
$activeLink = MSGorderAndDelivery;
$activeSubLink = "";
$content = '
<div class="text-center">
<h1>Правила заказа и доставки ' . MSGapplicationTitleQuotes . ':</h1>
<p><span class="custom-main-color">1.</span> Для заказа товаров и услуг необходимо позвонить по контактным телефонам и осуществить заказ.</p>
<p>
    <span style="display: block">' . MSGcontacts .'</span>
    <span style="display: block">' . MSGvelcomPhone . '</span>
    <span style="display: block">' . MSGmtsPhone . '</span>
</p>
<p><span class="custom-main-color">2.</span> Также заказ можно отправить в виде сообщения на e-mail <span class="custom-main-color">' . MSGemail . '</span>, со списком заказываемых товаров и услуг и контактными данными. После обработки заказа с Вами свяжутся для подтверждения заказа.</p>
<p><span class="custom-main-color">3.</span> Заказ, сделанный до 21.00 доставляется в тот же день. Заказ, сделанный после 21.00 доставляется на следующий день до 14.00.</p>
<p><span class="custom-main-color">4.</span> Более точное время доставки оговаривается с администратором по телелефону.</p>
<p><span class="custom-main-color">5.</span> Доставка осуществляется <span class="custom-main-color">БЕСПЛАТНО</span>.</p>
 </div>';
include('components/template.php');
?>