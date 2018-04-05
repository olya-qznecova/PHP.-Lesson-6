<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once  "../engine/render.php";
require_once  "../engine/db.php";

$conn = mysqli_connect("localhost", "root", "", 'fire');
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM products WHERE id = {$id}";

$res = query($sql, $conn);
mysqli_close($conn);

?>

<form action="">
    <input type="text" name="id"/>
    <input type="submit"/>
</form>
