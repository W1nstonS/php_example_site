<?php
  $folder='upload/';
  move_uploaded_file($_FILES['image']['tmp_name'],"$folder".$_FILES['image']['name']);

  $Topic = $_POST['topic'];
  $Description = $_POST['description'];
  $PathPic = $folder.$_FILES['image']['name'];
  $connect = mysqli_connect('localhost', 'root', '', 'course_work');
  $connect->query(" INSERT INTO `test_post` (`id`, `topic`, `description`, `pathPic`) VALUES (NULL, '$Topic', '$Description', '$PathPic')");
  if (!$connect) {
    die("Oh shit im sorry");
  }
  header('Location: index.php');
 ?>
