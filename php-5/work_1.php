<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "Пожалуйста, заполните все поля.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Пароли не совпадают.";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    echo "Регистрация прошла успешно!<br>";
    echo "Имя пользователя: " . $username . "<br>";
    echo "Хеш пароля: " . $hashed_password . "<br>";
}
?>
