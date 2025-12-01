<?php
require_once 'TimeData.php';
?>

<form method="post">
    <label>Количество часов:</label>
    <input type="number" name="hours" required>

    <label>Количество минут:</label>
    <input type="number" name="minutes" required>

    <button type="submit">Рассчитать</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];

    $obj = new TimeData($hours, $minutes);

    echo "<h3>Информация:</h3>";
    echo $obj->getInfo();

    echo "<h3>Общее количество минут:</h3>";
    echo $obj->getTotalMinutes();
}
?>
