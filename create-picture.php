<?php
    if (isset($_POST['username'])) {
        $name = htmlspecialchars($_POST['username']);
    } else {
        $name = 'Noname';
    }
    $width = 400;
    $height = 200;
    header('Content-type:  image/png');
    $img = imagecreatetruecolor($width, $height);
    $color1 = imagecolorallocate($img, 100, 230, 255);
    $color2 = imagecolorallocate($img, 200, 40, 130);
    imagefilledrectangle($img, 0, 0, $width, $height, $color1);
    imagerectangle($img, 20, 20, $width - 20, $height - 20, $color2);
    $text_color = imagecolorallocate($img, 40, 100, 40);
    imagestring($img, 500, 100, 60,  'SERTIFICATE', $text_color);
    imagestring($img, 150, 120, 100,  $name, $text_color);
    imagepng($img);
    imagedestroy($img);
