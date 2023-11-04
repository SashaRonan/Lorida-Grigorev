<?php

$calculate = '';

if (isset($_REQUEST['valueX'])) {
    $x = $_REQUEST['valueX'];
}

 if (isset($_REQUEST['valueY'])) {
     $y = $_REQUEST['valueY'];
 }

 if (isset($_REQUEST['selectOption'])) {
     $operation = $_REQUEST['selectOption'];
 }

if (!empty($x) && !empty($y)) {

    if ($operation == "addition") {
        $calculate = $x + $y;
    } elseif ($operation == "subtraction") {
        $calculate = $x - $y;
    } elseif ($operation == "multiplication") {
        $calculate = $x * $y;
    } elseif ($operation == "division") {
        if ($y != 0) {
            $calculate = $x / $y;
        } else {
            $error = "Деление на ноль невозможно";
        }
    }
}

if (!empty($_REQUEST["calcButton"]) && (empty($_REQUEST["valueX"]) || empty($_REQUEST["valueY"])) ) {
    $error = "Введите все  необходимые значения";
}

//if (!empty($_REQUEST["calcButton"]) && (!empty($_REQUEST["valueX"]) && ($_REQUEST['selectOption'] == "division") && ($_REQUEST["valueY"] = 0)) ) {
//    $error = "На ноль делить нельзя";
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST">

        <div>
            <label> <input type="text" name="valueX"> </label>
        </div>

        <div>
            <label>
                <select id="selOption" name="selectOption">
                    <option value="addition">Сложение (+)</option>
                    <option value="subtraction">Вычитание (-)</option>
                    <option value="multiplication">Умножение (*)</option>
                    <option value="division">Деление (/)</option>
                </select>
            </label>
        </div>

        <div>
            <label><input type="text" name="valueY"></label>
        </div>

        <div>
            <input type="submit" value="Вычислить" name="calcButton">
        </div>

    </form>

    <?php if (!empty($error)) { ?>
        <div>
            <span>Ошибка: </span>
            <span>
                <?php
                echo $error;
                ?>
            </span>
        </div>
    <?php } ?>

    <?php if (!empty($calculate)) { ?>
        <div>
            <span>Результат: </span>
            <span>
                <?php
                echo $calculate;
                ?>
            </span>
        </div>

    <?php } ?>

</body>
</html>