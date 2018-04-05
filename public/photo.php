<?php
header('Content-Type: text/html;charset=utf-8');
include_once "../config/main.php";

//Отображение галереи изображений//

$path = IMAGES_DIR;
$images = scandir($path);
if (false !== $images) {
    $images = preg_grep('/\\.(?:png|gif|jpe?g|bmp)$/', $images);
    foreach ($images as $image) {
        $imageName = IMAGES_DIR . "/". $image;
        echo '<a href="' . $imageName . '" target="_blank">';
        echo '<img src="' . $imageName . '" width="100"/></a>';
    }

}

//Загрузка изображений//

function uploadsFiles()
{
    foreach ($_FILES as $file) {

            $path = UPLOADS_DIR . "/". $_FILES['file']['name'];
            move_uploaded_file($file['tmp_name'], $path);
            $message = "Загрузка файла: " . $file['name'] . " успешно выполнена!";
        }
        echo '<h4>' . $message . '</h4>';
    }
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    uploadsFiles();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<h1>Выберите изображение</h1>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file"/>
    <input type="submit" value="Загрузить"/>
</form>

</body>
</html>
