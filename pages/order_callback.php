<?php

$name = trim($_POST['name']);
$call = trim($_POST['call']);
$page = $_SERVER['HTTP_REFERER'];

if (empty($name) || empty($call) || empty($page)) exit(header('Location: '.$_SERVER['HTTP_REFERER']));

mail(EMAIL, 'Форма заказа', "Отправлено со страницы: <a href='{$page}'>{$page}</a><br>Имя: {$name}<br>Телефон: {$call}", 'Content-type: text/html');

exit(header('Location: /spasibo'));