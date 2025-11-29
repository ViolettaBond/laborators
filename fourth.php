<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обработка массива</title>
</head>
<body>

<h2>Обработка массива</h2>

<form method="post">
    <table border="1">
        <tr>
            <td colspan="11">Введите 11 элементов</td>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < 11; $i++) {
                echo "<td><input type='text' name='arr[]' style='width:50px'></td>";
            }
            ?>
        </tr>
    </table>
    <br>
    <button type="submit">Готово</button>
</form>

<?php
if (!empty($_POST['arr'])) {

    $arr = $_POST['arr'];
    $sum = 0;
    foreach ($arr as $x) {
        $x = intval($x);
        if ($x < 0 && $x % 2 != 0) {
            $sum += $x;
        }
    }
    for ($i = 0; $i < count($arr); $i++) {
        $val = intval($arr[$i]);
        if ($val % 3 == 0) {
            $arr[$i] = $sum;
        }
    }

    echo "<br>";
    echo "<table border='1'><tr>";

    foreach ($arr as $x) {
        echo "<td>$x</td>";
    }

    echo "</tr></table>";
}
?>

</body>
</html>

