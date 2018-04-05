<?php
function uploadFile($destination, $attributeName ='file'){
    if (isset($_FILES[$attributeName])){
        $tmp = $_FILES[$attributeName]['tmp_name'];
        $filePath = $destination . $_FILES['file']['name'];
        move_uploaded_file($tmp, $filePath);
    }
}