<?php
    // $login = filter_var(trim($_POST['login']) FILTER_SANITIZE_STRING);
    // $password = filter_var(trim($_POST['pass']) FILTER_SANITIZE_STRING);
    // $ $_POST['RegPass']
    // echo $login;
    // echo $password;
    // $mysql = new mysqli('localhost', 'root', 'root', 'course_work');
    // $mysql->query(" INSERT INTO `users` (`id`, `login`, `password`) VALUES ('$login', '$password') ");
    //
    // $mysql->close();

    // $login = $_POST('login');
    // echo $login;

    // $login = filter_var(trim($_POST['Reglogin']) FILTER_SANITIZE_STRING);
    // $password = filter_var(trim($_POST['RegPass']) FILTER_SANITIZE_STRING);
    $Login = $_POST['RegLogin'];
    $Password = $_POST['RegPass'];
    $connect = mysqli_connect('localhost', 'root', '', 'course_work');
    $connect->query(" INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$Login', '$Password') ");
    if (!$connect) {
      die("Oh shit im sorry");
    }
    header('Location: sign.php');
