<?php

$ip = $_SERVER["REMOTE_ADDR"];
$file = "visits.json";

if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

$data = json_decode(file_get_contents($file), true);

$data[$ip] = time();

file_put_contents($file, json_encode($data));

$today = 0;
$week = 0;

foreach ($data as $addr => $t) {

    if (time() - $t < 86400) {
        $today++;
    }

    if (time() - $t < 86400 * 7) {
        $week++;
    }
}

echo "Сегодня уникальных посетителей: $today<br>";
echo "За неделю уникальных посетителей: $week<br>";

?>

