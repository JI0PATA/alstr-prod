<?php

include "db.php";

define('EMAIL', 'info@alukonkazan.ru');

if ($_SERVER['REQUEST_URI'] === '/') {
    $Page = 'index';
    $Module = 'index';
} else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));
    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);

    if (!empty($Module)) {
        $Param = [];
        for ($i = 0; $i < count($URL_Parts); $i++) {
            $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
        }
    }
}

$check_url_html = substr($Page, -4);

if ($check_url_html === 'html') {
    $Page = substr($Page, 0, strlen($Page) - 5);
}

if (file_exists("pages/$Page.php")) include_once "pages/$Page.php";
else echo "Страница не найдена!";

function head() {
    include "assets/templates/head.php";
    include "assets/templates/callback_form.php";
}

function hat() {
    include "assets/templates/hat.php";
}

function menu() {
    include "assets/templates/menu.php";
}

function footer() {
    include "assets/templates/footer.php";
}

function footer_full() {
    include "assets/templates/footer_full.php";
}

function head_callback() {
    include "assets/templates/head_callback.php";
}

function advantages() {
    include "assets/templates/advantages.php";
}

function invite() {
    include "assets/templates/invite.php";
}

function video_callbacks() {
    include "assets/templates/video-callbacks.php";
}

function banner() {
    include "assets/templates/banner.php";
}

function banner_main_color() {
    include "assets/templates/banner-main-color.php";
}