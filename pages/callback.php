<?php

$http_origin = $_SERVER['HTTP_ORIGIN'];

$name = trim($_POST['name']);
$category = trim($_POST['category']);
$comment = trim($_POST['comment']);

$sql = "INSERT INTO `comments` (`name`, `category`, `comment`) VALUES (?, ?, ?);";
$stmt = $dbh->prepare($sql);
$stmt->execute([$name, $category, $comment]);

$sql = "SELECT LAST_INSERT_ID() last_id;";
$stmt = $dbh->query($sql);
$res = $stmt->fetch(2);

$id = $res['last_id'];

mail(EMAIL, 'Обратная связь', "Категория: $category<br>Имя: $name<br>Комментарий: $comment<br>
<a href='$http_origin/actionCallback?action=publish&id=$id'>Опубликовать</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='$http_origin/actionCallback?action=block&id=$id'>Заблокировать</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='$http_origin/actionCallback?action=delete&id=$id'>Удалить</a>
", 'Content-type: text/html');

exit(header('Location: '.$_SERVER['HTTP_REFERER']));