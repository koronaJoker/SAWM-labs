<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=users;charset=utf8mb4", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    // $stmt = $pdo->prepare("SELECT name, role FROM users WHERE email = :email AND password = :password");
    // $stmt->execute(["email" => $email, "password" => $password]);

    if (!isset($email) || !isset($password)) {
        header("Location: login.php?error=NotSetEmailOrPassword");
        exit;
    }

    if(strlen($email) < 6) {
        header("Location: login.php?error=TooShortEmail");
        exit;
    }

    if(strlen($password) < 6) {
        header("Location: login.php?error=TooShortPassword");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php?error=InvalidEmail");
        exit;
    }

    $stmt = $pdo->query("SELECT name, role FROM users WHERE email = '$email' AND password = '$password'");
    //' OR '1'='1' # - user
    //' OR '1'='1' # - admin

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    

    if ($user) {
        $_SESSION["user_name"] = $user["name"];
        $_SESSION["user_role"] = $user["role"];
        if ($_SESSION["user_role"] === 'admin') {
            header("Location: admin.php");
            exit;
        }
        header("Location: index.php");
        exit;
    }

    else {
        header("Location: login.php?error=UnknownUser");
        exit;
    }
}

