<?php require 'includes/header.php'; ?>

<div class="auth-form">
    <h1>Регистрация</h1>
    <form action="/actions/register_action.php" method="POST">
        <input type="text" name="name" placeholder="Ваше имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" class="btn">Зарегистрироваться</button>
    </form>
</div>
<?php require 'includes/footer.php'; ?>