<?php

/*
 *  eval() :  belirtilen içeriği php kodu olarak algılar ve çalıştırır.
 *  exec() : belirtilen komutu çalıştırır ve buldurğu değerleri dizi olarak geri döndürür.
 *
 */

$icerik = 'echo "Halil kazan";';

eval($icerik);

print  "<hr>";

/*
exec("ping google.com",$sonuc);
echo "<pre>";
print_r($sonuc);
*/

exec("dir",$sonuc2);
echo "<pre>";
print_r($sonuc2);
print  "<hr>";

exec("whoami",$sonuc3);
echo "<pre>";
print_r($sonuc3);
print  "<hr>";


