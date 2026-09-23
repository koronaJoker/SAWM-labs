<?php

session_start();
if (!isset($_SESSION['user_role'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <header>
        <h1>Привет! Админ</h1>
        <p>Я супер-страница доступная только администраторам!</p>
    </header>
</body>
</html>