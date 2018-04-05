<?php

header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once  "../engine/render.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadsFiles(PUBLIC_DIR . "/img/");
}

$files = getGallery();
echo render('gallery', ['images' => $files], false);
?>
