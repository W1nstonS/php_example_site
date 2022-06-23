<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, charset="UTF-8"">
<link rel="stylesheet" href="css/forumstyle.css">
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

<!-- тут начну вводить пхп код -->

<?php
include "database.php";
$result = mysqli_query($induction, "SELECT * FROM `forumdata`");

while ($card = mysqli_fetch_assoc($result)) {
  // print_r($card['topic']);
  // echo "<br>";
?>


<div class="message">
  <div class="name_id">
    <h5><?php echo $card['name']; ?></h5>
    <h5>id пользователя= <?php echo $card['id_author']; ?></h5>
  </div>
    <p><?php echo $card['text']; ?>
    </p>
</div>

<?php
}
?>


<!-- А тут должен закончить -->

<?php
if ($_COOKIE['user'] != ''):
 ?>

<div class="add_thread">
  <form method="POST" action="addToForum.php" class="add_thread">
    <textarea type="text" name="textForum" placeholder="Текст" class="Forum_textarea"></textarea>
    <button type="submit" class="btn">Опубликовать</button>
  </form>
</div>

<?php endif; ?>

</body>
</html>
