<?php

session_start();
ob_start();
// ob_start() : çıktı tamponlanmasını başlatır.
// ob_end_clean() : veri depolayan çıktı tamponlanmasını siler ve çıktı cart curtunu kapatır.
// ob_end_flush() : çıktı tamponlanmasını boşaltır ve kapatır.
// ob_get_contents() : tamponlanma içeriğini bulur ve geri döndürür.

echo "halil kazan" . "<br>";
echo "test yazı <br><br>";

$depo =ob_get_contents();
echo $depo;

ob_end_flush();