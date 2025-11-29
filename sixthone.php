<!doctype html>
<html>
<body>

<?php
if (isset($_GET["logout"])) {
    setcookie("auth", "", time() - 3600);
    header("Location: index.php");
    exit;
}

if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {

    $login = $_POST["login"];
    $pass = $_POST["password"];

    if ($login == "admin" && $pass == "1234") {
        setcookie("auth", "1", time() + 3600);
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Неверные данные!</p>";
    }
}

if (isset($_COOKIE["auth"])) {
    echo "<p>Вы авторизованы</p>";
    echo '<a href="?logout=1">Выход</a>';
    exit;
}
?>

<form method="post">
    Логин: <input type="text" name="login"><br><br>
    Пароль: <input type="password" name="password"><br><br>
    Email: <input type="email" name="email"><br><br>
    <button type="submit">Войти</button>
</form>

</body>
</html>
<?php
