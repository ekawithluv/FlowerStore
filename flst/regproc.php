<div class="container mt-4">
<?php
require 'style.php';
//require 'cookie.php';

if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['userName']) && !empty($_POST['number'])) 
{

$login=filter_var(trim($_POST['login']));
$password=filter_var(trim($_POST['password']));
$userName=filter_var(trim($_POST['userName']));
$number=filter_var(trim($_POST['number']));

if(mb_strlen($login)<1||mb_strlen($login)>15) {
    echo 'Допустимая длина логина: 1-15 символов.'.'<br>'.'Вернуться к <a href="reg.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="auth.php">авторизации</a>.';
    exit();
} else if (mb_strlen($password)<1||mb_strlen($password)>15) {
    echo 'Допустимая длина пароля: 1-15 символов.'.'<br>'.'Вернуться к <a href="reg.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="auth.php">авторизации</a>.';
    exit();
} else if (mb_strlen($userName)<1||mb_strlen($userName)>50) {
    echo 'Допустимая длина пароля: 1-50 символов.'.'<br>'.'Вернуться к <a href="reg.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="auth.php">авторизации</a>.';
    exit();
} else if (mb_strlen($password)<1||mb_strlen($password)>30) {
    echo 'Допустимая длина пароля: 1-30 символов.'.'<br>'.'Вернуться к <a href="reg.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="auth.php">авторизации</a>.';
    exit();
}

//$password=md5($password.'ng869f86geDF');
$password=password_hash($password, PASSWORD_DEFAULT);

$db=new mysqli('localhost','root','root','flst');

$result=$db->query("SELECT * FROM `user` WHERE `login`='$login'");
$user=$result->fetch_assoc();
if($user) {
    echo '<h2><font color="red">Такой пользователь уже зарегистрирован.</font></h2>'.'Вернуться к <a href="reg.php">регистрации</a>.'.'<br>'.'Вернуться к <a href="auth.php">авторизации</a>.';
    exit();
}

$db->query("INSERT INTO `user` (`name`, `login`, `password`, `number`) 
VALUES('$userName', '$login', '$password', '$number')");

$db->close();

header('Location: regsuc.php');
}
else {
header('Location: err.php');}
?>
</div>

<?php //INSERT INTO `products` (`id`, `name`, `amount`, `price`) VALUES (NULL, 'Роза', '53', '100');
?>