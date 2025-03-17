<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        echo "Пожалуйста, заполните все поля.";
        exit;
    }

    if (strlen($username) < 4) {
        echo "Имя пользователя должно содержать не менее 4 символов.";
        exit;
    }

    $stored_username = "Соня"; 
    $stored_password = "1234"; 

    if ($username === $stored_username && $password === $stored_password) {
        echo "Вход выполнен успешно!";
    } else {
        echo "Неверное имя пользователя или пароль.";
    }
}
?>
