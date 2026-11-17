<?php require 'includes/header.php'; ?>

<div class="auth-form">
    <h1>Вход в аккаунт</h1>
    <form action="/actions/login_action.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" class="btn">Войти</button>
    </form>
</div>

<?php require 'includes/footer.php'; ?>