<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная: координаты 4-й вершины</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h3>Определение координат четвёртой вершины прямоугольника</h3>

<form method="post">
    <p>Точка 1:
        <input type="number" name="x1" placeholder="x1">
        <input type="number" name="y1" placeholder="y1">
    </p>

    <p>Точка 2:
        <input type="number" name="x2" placeholder="x2">
        <input type="number" name="y2" placeholder="y2">
    </p>

    <p>Точка 3:
        <input type="number" name="x3" placeholder="x3">
        <input type="number" name="y3" placeholder="y3">
    </p>

    <p><input type="submit" value="Найти"></p>
</form>

<?php

if (isset($_POST["x1"], $_POST["y1"],
    $_POST["x2"], $_POST["y2"],
    $_POST["x3"], $_POST["y3"])) {

    $x = [$_POST["x1"], $_POST["x2"], $_POST["x3"]];
    $y = [$_POST["y1"], $_POST["y2"], $_POST["y3"]];

    if ($x[0] == $x[1]) $x4 = $x[2];
    elseif ($x[0] == $x[2]) $x4 = $x[1];
    else $x4 = $x[0];


    if ($y[0] == $y[1]) $y4 = $y[2];
    elseif ($y[0] == $y[2]) $y4 = $y[1];
    else $y4 = $y[0];

    echo "<h3>Координаты 4-й вершины: ($x4, $y4)</h3>";
}

?>

</body>
</html>
