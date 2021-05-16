///@L1GHTCODER\\\

<?php

if (!file_exists('madeline.php')) { copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php'); } include 'madeline.php'; $MadelineProto = new \danog\MadelineProto\API('session.madeline'); $MadelineProto->start(); 

$img = imagecreatefromjpeg('rasm.jpg');

$white = imagecolorallocate($img, 255,75,75);
$time = date("H:i",strtotime("2 hour"));

$txt = $time;
$font = "tema.ttf"; 
$x = 170;
$y = 150;

imagettftext($img, 100, 0, $x,$y, $white, $font, $txt);

imagejpeg($img,"goto.jpg");

 $MadelineProto->photos->uploadProfilePhoto(['file' => "goto.jpg"]);

?>