<<?php

setcookie('user', $user['login'], time() - 3600, "/");
setcookie('id', $user['id'], time() - 3600, "/");
header('Location: index.php');

 ?>
