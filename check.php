<?php
    
    $Login = $_POST['RegLogin'];
    $Password = $_POST['RegPass'];
    $connect = mysqli_connect('localhost', 'root', '', 'course_work');
    $connect->query(" INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$Login', '$Password') ");
    if (!$connect) {
      die("Oh shit im sorry");
    }
    header('Location: sign.php');
