
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $reset = $_POST['reset'];
    if ($reset) {
        $view = "";
        $number1 = 0;
        $number2 = 0;
        $operation = false;
        $answer = "";
    }
    if ($operation) {
        if ($operation == "+") {
            $result = $number1 + $number2;
        }
        else if ($operation == "-") {
            $result = $number1 - $number2;
        }
        else if ($operation == "*") {
            $result = $number1 * $number2;
        }
        else if ($operation == "/") {
            $result = ($number2 != 0) ? $number1 / $number2 : "Infinity";
        }
        $answer = "$number1 $operation $number2 = " . $result;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/calculator.css">
    <title>Document</title>
</head>

<body>

<form action="" method="post">
    <input class="number" name="number1" type="text" value="<?= $number1 ?>"><br><br>
    <input class="number" name="number2" type="text" value="<?= $number2 ?>"><br><br>
    <input class="number" name="result" type="text" value="<?= $answer ?>" disabled/><br><br>

    <select name="operation" onchange="submit()">
        <option value="">Select operation</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input class="operation" name="operation" value="+" type="submit"/>
    <input class="operation" name="operation" value="-" type="submit"/>
    <input class="operation" name="operation" value="*" type="submit"/>
    <input class="operation" name="operation" value="/" type="submit"/>
    <input class="reset" name="reset" value="Reset" type="submit"/>
</form>

</body>
</html>



