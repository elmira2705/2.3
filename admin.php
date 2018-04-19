<?php
header('Refresh: 10; URL=admin.php');
header ('Content-type: image/jpeg');
header ('Content-Disposition: attachment; filename= "Your Certificate"');

$json = file_get_contents(_DIR_."/answers.json");
$data = json_decode($json, true);
$right = 0;
$wrong = 0;
   if ($_POST[q1] == ["answer1"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q2] == ["answer3"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q3] == ["answer1"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q4] == ["answer1"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q5] == ["answer2"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q6] == ["answer3"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q7] == ["answer1"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q8] == ["answer2"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_POST[q9] == ["answer3"]){
     $right++;
   } else {
     $wrong++;
   }

   $image = @imagecreate(110, 20)
       or die("Невозможно создать поток изображения");
   $background_color = imagecolorallocate($image, 0, 139, 139);
   $text_color = imagecolorallocate($image, 0, 0, 0);
   $percent= $right/100*3;
   imagestring($image, 1, 5, 5,  "$_REQUEST['first_name'].', Ваш результат при прохождении теста:'. $percent. '%'", $text_color);
   imagepng($image);
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Домашнее задание к лекции 2.2 «Обработка форм». Вывод ответов</title>
</head>
<body>
<h3>Ваш результат ниже, попробуйте свои силы на другом тесте.</h3>
      <tr>
        <td>Правильные ответы:<?php echo $right; ?></td>
        <td>Неправильные ответы:<?php echo $wrong; ?></td>
</body>
</html>
