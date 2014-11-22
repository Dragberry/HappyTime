<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');
$_POST['name'];
$_POST['phone'];
$_POST['time'];
$_POST['type'];
$_POST['info'];

$message = 'Информация о заказе:\n\n';
$message .= 'Имя:\t' . $_POST['name'] . '\n';
$message .= 'Телефон:\t' . $_POST['phone'] . '\n';
$message .= 'Время:\t' . $_POST['time'] . '\n';
$message .= 'Тип:\t' . $_POST['type'] . '\n';
$message .= 'Информация:\t' . $_POST['info'] . '\n';

mail($MSGemail, 'Заказ на Деда Мороза', $message);
mail('max-hellfire@mail.ru', 'Заказ на Деда Мороза', $message);
mail('yuria-25@mail.ru', 'Заказ на Деда Мороза', $message);
