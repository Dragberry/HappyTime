<?php
include($_SERVER['DOCUMENT_ROOT'].'/pages/components/messages.php');

$message = '
<html>
<head>
  <title>Информация о заказеЖ</title>
</head>
<body>
  <table>
        <tr>
            <th>Параметр</th><th>Значение</th>
        </tr>
        <tr>
            <td>Имя</td><td>' . $_POST['name'] .'</td>
        </tr>
        <tr>
            <td>Телефон</td><td>' . $_POST['phone'] . '</td>
        </tr>
        <tr>
            <td>Время</td><td>' . $_POST['time'] . '</td>
        </tr>
        <tr>
            <td>Тип</td><td>' . $_POST['type']. '</td>
        </tr>
        <tr>
            <td>Информация</td><td>' . $_POST['info'] . '</td>
        </tr>
  </table>
</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";


mail($MSGemail, 'Заказ на Деда Мороза', $message, $headers);
mail('max-hellfire@mail.ru', 'Заказ на Деда Мороза', $message, $headers);
mail('yuria-25@mail.ru', 'Заказ на Деда Мороза', $message, $headers);
mail('HappyTime.by@mail.ru', 'Заказ на Деда Мороза', $message, $headers);
