<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, charset="UTF-8"">
<link rel="stylesheet" href="css/test.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, charset="UTF-8"">
</head>
<body>
  <div class="upload_block">
  <h5> Отправка поста </h5>
  <form method="POST"action="upload.php"enctype="multipart/form-data" class="upload_block">
  <input type="file"name="image">
  <input type="text" class="text" name="topic" placeholder="Заголовок">
  <input type="text" class="text" name="description" placeholder="Описание">
  <input type="submit" class="btn" name="submit_image"value="Опубликовать">
</form>
<a class="back" href="index.php">Вернуться на главную</a>
</div>
</body>
</html>
