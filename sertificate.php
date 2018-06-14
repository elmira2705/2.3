<?php
$image = imagecreatetruecolor (300,600);
$backColor = imagecolorallocate ($image, 120, 39, 93);
$textColor = imagecolorallocate ($image, 240, 78, 44);
$boxFile = __DIR__ . "/1.jpg";

if(!file_exists($boxFile)){
    echo 'Файл с картинкой не найден!';
    exit;
}

$imBox = imagecreatefromjpeg ($boxFile);

imagefill ($image, 0, 0, $backColor);
imagecopy ($image, 3, 3, 0, 0, 600, 600);

$fontFile= __DIR__ . "/riesling.ttf";
if (!file_exists($fontFile)){
    echo 'Файл со шрифтом не найден!';
    exit;
}
imagettftext($image, 60,0,20,50,$textColor, $fontFile, 'Правильно: '.$right . ', неправильно: '.$wrong);
header ('Content-Type: image / jpeg');
imagejpeg ($image, 'sertificate.jpg');
imagedestroy($image);
 ?>
