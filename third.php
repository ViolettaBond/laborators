<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Четырёхзначные числа с разными цифрами</title>
</head>
<body>


        <?php
        for ($n = 1000; $n <= 9999; $n++) {
            $a = floor($n / 1000);
            $b = floor(($n % 1000) / 100);
            $c = floor(($n % 100) / 10);
            $d = $n % 10;

            if ($a != $b && $a != $c && $a != $d &&
                $b != $c && $b != $d &&
                $c != $d) {
                echo $n . "<br>";
            }
        }
        ?>

</body>
</html>

