<title>Авторизация</title>
<?php require 'style.php';
//require 'cookie.php'; ?>
<div class="container mt-4">
    <form action="authproc.php" method='post'>
        <input type="text" class='form-control' name='login' id='login' placeholder='Введите логин'>
        <br>
        <input type="password" class='form-control' name='password' id='password' placeholder='Введите пароль'>
        <br>
        <button class='btn btn-success' type='submit'>Авторизация</button>
        <br><br>
        <p>Ещё не зарегистрированы? Нажмите <a href='reg.php'>здесь</a> для регистрации.</p>
        <p>Назад на <a href='index.php'>главную</a>.</p>
    </form>
</div>