<!doctype html>
<html>
<body>

<form method="post">
    <p>Первый текст:</p>
    <textarea name="t1" rows="5" cols="50"></textarea>

    <p>Второй текст:</p>
    <textarea name="t2" rows="5" cols="50"></textarea>

    <br><br>
    <button type="submit">Сравнить</button>
</form>

<?php
if (!empty($_POST["t1"]) && !empty($_POST["t2"])) {

    $t1 = strtolower(preg_replace("/[^a-zа-яё0-9 ]/iu", " ", $_POST["t1"]));
    $t2 = strtolower(preg_replace("/[^a-zа-яё0-9 ]/iu", " ", $_POST["t2"]));

    $a1 = array_filter(explode(" ", $t1));
    $a2 = array_filter(explode(" ", $t2));

    $same = 0;

    foreach ($a1 as $word) {
        if (in_array($word, $a2)) {
            $same++;
        }
    }

    $total = max(count($a1), count($a2));
    $percent = $same / $total;

    if ($percent >= 0.8) $grade = 5;
    elseif ($percent >= 0.6) $grade = 4;
    elseif ($percent >= 0.4) $grade = 3;
    elseif ($percent >= 0.2) $grade = 2;
    else $grade = 1;

    echo "<p>Совпадение: $grade из 5</p>";
}
?>

</body>
</html>
