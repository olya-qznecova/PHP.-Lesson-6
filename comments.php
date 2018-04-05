<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once UPLOADS_DIR . "/uploads";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $content = $_POST['content'];
    execute("INSERT INTO fire.comments (name, content) VALUES('{$name}', '{$content}')");
}

?>

<form action="" method="post">

   Имя: <input type="text" name="name"/><br>
    Комментарий:
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <input type="submit"/>

</form>
