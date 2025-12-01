<?php

$input = file("data.txt", FILE_IGNORE_NEW_LINES);

$seenEmails = [];
$seenNames = [];
$result = [];

foreach ($input as $line) {
    if (trim($line) === "") continue;

    list($name, $password, $email) = explode(":", $line);


    if (in_array($email, $seenEmails)) {
        continue;
    }


    if (in_array($name, $seenNames)) {
        continue;
    }


    $seenEmails[] = $email;
    $seenNames[] = $name;

    $result[] = $line;
}

file_put_contents("clean.txt", implode(PHP_EOL, $result));

echo "Готово. Проверь clean.txt";