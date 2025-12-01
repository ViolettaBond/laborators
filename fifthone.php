<?php
class TimeBase {
    public $hours;
    public $minutes;

    public function __construct($hours, $minutes) {
        $this->hours = $hours;
        $this->minutes = $minutes;
    }

    public function info() {
        return "Часы: $this->hours, Минуты: $this->minutes";
    }

    public function process() {
        return $this->hours * 60 + $this->minutes;
    }
}

class TimeExtended extends TimeBase {
    public $seconds;

    public function __construct($hours, $minutes, $seconds) {
        parent::__construct($hours, $minutes);
        $this->seconds = $seconds;
    }

    public function process() {
        $totalMinutes = parent::process();
        return $totalMinutes * 60 + $this->seconds;
    }

    public function info() {
        return "Часы: $this->hours, Минуты: $this->minutes, Секунды: $this->seconds";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная 11.2</title>
</head>
<body>
<h2>Лабораторная 11.2</h2>

<form method="post">
    <label>Часы: <input type="number" name="h" required></label><br><br>
    <label>Минуты: <input type="number" name="m" required></label><br><br>
    <label>Секунды: <input type="number" name="s" required></label><br><br>
    <button type="submit">Рассчитать</button>
</form>

<hr>

<?php
if ($_POST) {
    $h = intval($_POST['h']);
    $m = intval($_POST['m']);
    $s = intval($_POST['s']);

    $baseObj = new TimeBase($h, $m);
    $childObj = new TimeExtended($h, $m, $s);

    echo "<p><b>Родительский класс:</b><br>";
    echo $baseObj->info() . "<br>";
    echo "Всего минут: " . $baseObj->process() . "</p>";

    echo "<p><b>Класс-потомок:</b><br>";
    echo $childObj->info() . "<br>";
    echo "Всего секунд: " . $childObj->process() . "</p>";
}
?>
</body>
</html>
