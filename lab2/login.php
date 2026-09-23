<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <form action="handler.php" method = "POST">
        <?php echo $_GET['error'] ?? ''?>
        <h1>Авторизация</h1>
        <input name = "email" type="text" placeholder="email:" minlength="6" required>
        <input name = "password" type="password" placeholder="password:" minlength="4" required>
        <button type="submit">Зарегаться</button>

        <a href="registration.php">Регистрация</a>
    </form>

</body>
</html>

<?php
