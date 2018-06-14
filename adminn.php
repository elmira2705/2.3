<?php
if (is_uploaded_file)
if (is_uploaded_file($_FILES['new_test']['name'])) {
   header (Location: __DIR__ . '/listn.php')
} else {
   echo "Файл не был загружен";
   exit;
}

$uploaded_tests ='./Tests/';
if (!empty($_POST) || !empty($_FILES)) {
    move_uploaded_file($_FILES ['new_test']['tmp_name'], $uploaded_tests .
    $_FILES['new_test']['name']);
  }
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>2.2 Обработка форм. Загрузка json с тестом</title>
</head>
<body>
<h3>Страница администратора</h3>
<h4> Загрузите новый тест в формате json: </h4>
<form enctype="multipart/form-data" action="/" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<div><input type="file" name="new_test"></div>
<input type="submit" value="Загрузить">
</form>
</body>
</html>
