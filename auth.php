<?php
$Login = $_POST['LogLogin'];
$Password = $_POST['LogPass'];
$connect = mysqli_connect('localhost', 'root', '', 'course_work');

$result = $connect-> query("SELECT * FROM `users` WHERE `login` = '$Login' AND `password` = '$Password' ");
$user = $result->fetch_assoc();
if (count($user) == 0) {
  echo "Не зашел сорян";
  exit();
  
}
setcookie('user', $user['login'], time() + 3600, "/");
setcookie('id', $user['id'], time() + 3600, "/");
header('Location: index.php');
