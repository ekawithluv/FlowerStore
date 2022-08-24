<title>Регистрация</title>
<?php require 'style.php'; 
//require 'cookie.php';?>
<div class="container mt-4">
    <form action="regproc.php" method='post'>
        <input type="text" class='form-control' name='userName' id='userName' placeholder='Введите ФИО'>
        <br>
        <input type="text" class='form-control' name='login' id='login' placeholder='Введите логин'>
        <br>
        <input type="password" class='form-control' name='password' id='password' placeholder='Введите пароль'>
        <br>
        <input type="text" class='form-control' name='number' id='number' placeholder='Введите номер телефона'>
        <br>
        <button class='btn btn-success' type='submit'>Регистрация</button>
        <br><br>
        <p>Уже зарегистрированы? Нажмите <a href='auth.php'>здесь</a> для авторизации.</p>
        <p>Назад на <a href='index.php'>главную</a>.</p>
    </form>
</div>