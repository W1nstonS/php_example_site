<?php
//textForum
  $TextForum = $_POST['textForum'];
  $userName = $_COOKIE['user'];
  $userID = $_COOKIE['id'];
  $connect = mysqli_connect('localhost', 'root', '', 'course_work');
  $connect->query(" INSERT INTO `forumdata` (`id`, `name`, `text`, `id_author`) VALUES (NULL, '$userName', '$TextForum', '$userID') ");
  if (!$connect) {
    die("Oh shit im sorry");
  }
  header('Location: forum.php');
 ?>
