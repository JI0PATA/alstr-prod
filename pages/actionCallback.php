<?php

$action = $_GET['action'];
$id = $_GET['id'];

if ($action === 'publish') {
    $sql = "UPDATE `comments` SET `active` = 1 WHERE `id` = $id";
} elseif ($action === 'block') {
    $sql = "UPDATE `comments` SET `active` = 0 WHERE `id` = $id";
} elseif ($action === 'delete') {
    $sql = "DELETE FROM `comments` WHERE `id` = $id";
}

$res = $dbh->query($sql);

if ($res) echo 'Действие успешно совершено! Можете закрыть вкладку';
else echo 'Провал! Попробуйте ещё раз!';