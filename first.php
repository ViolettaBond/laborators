<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<h3>Найти периметр четырёхугольника по координатам его вершин</h3>

<form method="post">
    <p>Введите x1 и y1:
        <label>
            <input type="number" name="x1" step="any">
        </label>
        <label>
            <input type="number" name="y1" step="any">
        </label>
    </p>

    <p>Введите x2 и y2:
        <label>
            <input type="number" name="x2" step="any">
        </label>
        <label>
            <input type="number" name="y2" step="any">
        </label>
    </p>

    <p>Введите x3 и y3:
        <label>
            <input type="number" name="x3" step="any">
        </label>
        <label>
            <input type="number" name="y3" step="any">
        </label>
    </p>

    <p>Введите x4 и y4:
        <label>
            <input type="number" name="x4" step="any">
        </label>
        <label>
            <input type="number" name="y4" step="any">
        </label>
    </p>

    <p>
        <input type="submit" value="Отправить">
    </p>
</form>

<?php
if (
    isset($_POST["x1"]) && isset($_POST["y1"]) &&
    isset($_POST["x2"]) && isset($_POST["y2"]) &&
    isset($_POST["x3"]) && isset($_POST["y3"]) &&
    isset($_POST["x4"]) && isset($_POST["y4"])
) {

    $x1 = $_POST["x1"];
    $y1 = $_POST["y1"];
    $x2 = $_POST["x2"];
    $y2 = $_POST["y2"];
    $x3 = $_POST["x3"];
    $y3 = $_POST["y3"];
    $x4 = $_POST["x4"];
    $y4 = $_POST["y4"];

    function dist($x1, $y1, $x2, $y2)
    {
        return sqrt(($x2 - $x1)**2 + ($y2 - $y1)**2);
    }

    $AB = dist($x1, $y1, $x2, $y2);
    $BC = dist($x2, $y2, $x3, $y3);
    $CD = dist($x3, $y3, $x4, $y4);
    $DA = dist($x4, $y4, $x1, $y1);

    $P = $AB + $BC + $CD + $DA;

    echo "<h3>Периметр: " . round($P, 3) . "</h3>";
}
?>

</body>
</html>
