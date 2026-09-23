<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <form action="handler.php" method = "post">
        <h1>Регистрация</h1>
        <input name = "name" type="text" placeholder="name:" minlength="3">
        <input name = "email" type="text" placeholder="email:" minlength="8">
        <input name = "password" type="password" placeholder="password:" minlength="4">
        <button type="submit">Зарегаться</button>
        <a href="login.php">Войти</a>
    </form>
</body>
</html>

<?php
