<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, charset="UTF-8"">
<link rel="stylesheet" href="css/lks.css">
<!-- <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script> -->
</head>
<body>

  <div class="topnav">
    <a class="active" href="index.php">Главная страница</a>
    <a href="forum.php">Форум</a>
    <?php
    if ($_COOKIE['user'] != ''):
     ?>
    <a href="lks.php">Личный кабинет | <?=$_COOKIE['user']?> </a>
    <a href="test.php">Публикация</a>
  <?php endif; ?>
  <?php if ($_COOKIE['user'] == ''):  ?>
    <a href="sign.php">Регистрация/вход  </a>
  <?php endif ?>
  <?php
  if ($_COOKIE['user'] != ''):
   ?>
  <a href="exit.php">Выход</a>
  <?php endif; ?>
  </div>

<div class="news">
  <h5 class="name">Имя:  <?=$_COOKIE['user']?> </h5>
  <h4 class="id"> Идентификатор пользователя: <?=$_COOKIE['id']?> </h4>
</div>


</body>
</html>
