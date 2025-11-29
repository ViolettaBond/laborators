<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Матрица 5x5</title>
</head>
<body>

<h2>Матрица 5×5</h2>

<form method="post">
    <table border="1">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                echo "<td><input type='text' name='b[$i][$j]' style='width:50px'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <button type="submit">Готово</button>
</form>

<?php
if (!empty($_POST['b'])) {
    $b = $_POST['b'];
    $prod = 1;

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $val = intval($b[$i][$j]);
            if ($i + $j > 4) {
                $prod *= $val;
            }
        }
    }

    echo "<p>Произведение элементов ниже левой диагонали: $prod</p>";
}
?>

</body>
</html>
