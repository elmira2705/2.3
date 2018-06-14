<?php
$test_number=(int)$_GET['test_number'];

if (!isset($_GET['test_number'])) {
  http_response_code (404);
  echo 'Теста с таким номером не существует. Попробуйте еще раз.';
  exit;
}


if (!empty($_GET[‘q1’, 'q2', 'q3'])) {
$right = 0;
$wrong = 0;
   if ($_GET[q1] == ["answer1"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_GET[q2] == ["answer3"]){
     $right++;
   } else {
     $wrong++;
   }
   if ($_GET[q3] == ["answer1"]){
     $right++;
   } else {
     $wrong++;
   }
 } else {
   echo 'Вы не ответили на вопросы';
   session_start ();
   $_SESSION ['right']=$right;
   $_SESSION ['wrong']=$wrong;
 }
?>

<html>
  <head>
    <title>2.2 Обработка форм»</title>
  </head>
  <body>
    <h4>Пожалуйста, выберите тест для прохождения:</h4>
<form action="/" method="GET">
  <div><p>Имя:</p><input type="text" name="name"></div>
  <div><input type="text" name="test_number"></div>
  <input type="submit" value="Выбрать">
</form>
<?php if(isset ($test_number)){ ?>
<h4>Тест №<?php echo $test_number?></h4>
<form>
<?php  $json = file_get_contents(./Tests/."$test_number.json");
  $data = json_decode($json, true);
  foreach($data as $item) { ?>
    <form action="/" method="GET">
          <fieldset>
            <legend><?php echo $item["question1"]?></legend>
            <label><input type="radio" name="q1"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q1"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q1"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question2"]?></legend>
            <label><input type="radio" name="q2"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q2"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q2"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question3"]?></legend>
            <label><input type="radio" name="q3"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q3"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q3"><?php echo $item["answer3"]?></label>
          </fieldset>
          <input type="submit" value="Отправить">
</form>
<?php if (!empty($_GET[‘q1’, 'q2', 'q3'])) { ?>
   <h4>Ваш результат:</h4>
         <img src="sertificate.php">
<?php } ?>
  </body>
</html>
