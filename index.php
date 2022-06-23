<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, charset="UTF-8"">
<link rel="stylesheet" href="css/style.css">
<!-- <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script> -->
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Главная страница</a>
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

<?php
include "database.php";
$result = mysqli_query($induction, "SELECT * FROM `test_post`");

while ($card = mysqli_fetch_assoc($result)) {
  // print_r($card['topic']);
  // echo "<br>";
?>

  <div class="news">
      <img src=<?php echo $card['pathPic']; ?> class="img-cont">
        <h5> <?php echo $card['topic']; ?>  </h5>

      <p><?php echo $card['description']; ?>
      </p>
  </div>

  <?php
}
 ?>

</body>
</html>
