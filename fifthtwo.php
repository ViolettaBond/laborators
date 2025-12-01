<?php
require_once "antenna.php";
?>

<h1>Лабораторная 11.3 — Ввод данных</h1>

<form method="GET">
    Диаметр: <input type="number" name="d" required><br><br>
    Материал: <input type="text" name="m" required><br><br>
    Цена: <input type="number" name="p" required><br><br>

    Тип подвески:
    <select name="t">
        <option value="азимутальная">азимутальная</option>
        <option value="полярная">полярная</option>
        <option value="тороидальная">тороидальная</option>
    </select><br><br>

    <button type="submit">Создать объект</button>
</form>

<hr>

<?php
if (isset($_GET["d"])) {

    $base = new Antenna($_GET["d"], $_GET["m"], $_GET["p"]);
    $child = new AdvancedAntenna($_GET["d"], $_GET["m"], $_GET["p"], $_GET["t"]);

    echo "<h2>Класс 1-го уровня</h2>";
    echo $base->info() . "<br>";
    echo "Качество Q = " . $base->quality() . "<br><br>";

    echo "<h2>Класс 2-го уровня</h2>";
    echo $child->info() . "<br>";
    echo "Качество Qp = " . $child->quality() . "<br><br>";
}
?>
