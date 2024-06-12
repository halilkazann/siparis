<?php

$text = "<b>Hali'l k\"azan Extra Eğitim</b>";

$islem = htmlspecialchars($text , ENT_QUOTES);
$islem2 = htmlspecialchars_decode($text , ENT_QUOTES);

echo $text ."<br>";
echo $islem ."<br>";
echo $islem2 ."<br>";

