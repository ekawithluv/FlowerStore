<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Магазин цветов</title>
    <link 
      rel="preconnect" 
      href="https://fonts.googleapis.com"
    >
    <link 
      rel="preconnect" 
      href="https://fonts.gstatic.com" 
      crossorigin
    >
    <link 
      href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" 
      rel="stylesheet"
    >
    <link
      rel="icon"
      href="https://cdnb.artstation.com/p/users/avatars/005/657/649/large/33757c2750ca53ae103c5f555e12993b.jpg?1652799708"
      type="image"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <h1>Магазин цветов</h1> 
      <?php if(empty($_COOKIE['user'])) {?>     
      <button class='btn btn-success'><a href='reg.php' style='text-decoration:none; color:white;'>Регистрация</a></button>
      <button class='btn btn-success'><a href='auth.php' style='text-decoration:none; color:white;'>Авторизация</a></button>
      <?php }
      else {?>         
      <button class='btn btn-success' style='float:right'><a href='exit.php' style='text-decoration:none; color:white;'>Выход</a></button>     
      <h2><font color='green'>Вы авторизованы как <?=$_COOKIE['user']?>!</font></h2>     
    <?php } ?>
      <br>
    </header>