<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Озоновый слой — интернет-магазин</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container header-inner">
            <a href="/index.php" class="logo">Озоновый слой</a>
            <nav class="nav">
                <a href="/index.php">Каталог</a>
                <a href="/cart.php">Корзина</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span>Привет, <?= htmlspecialchars($_SESSION['user_name']) ?>!</span>
                    <a href="/actions/logout.php">Выйти</a>
                <?php else: ?>
                    <a href="/login.php">Войти</a>
                    <a href="/register.php">Регистрация</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main class="container">