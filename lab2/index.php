<?php
session_start();

$userName = $_SESSION["user_name"];

if (!isset($userName)) {
    header("Location: login.php?NotAuthorizedUser");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Закрытая страница</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>


    <header>
        <h1>Привет! <?php echo $userName ?></h1>
        <p>Я страница доступная только для авторизованных пользователей</p>
    </header>
</body>
</html>