<?php

$dosya = "test.php";
echo filetype($dosya);

$newDosya = "test.zip";
touch($newDosya); // yeni dosya oluşturuyor.Değişkene eşitlenirse boolean değer döner. 1-0

// dosya silmek için unlink() kullanılır. unlink("test.php") dosyayı siler ve 1-0 dönderir
// copy() : dosya kopyalamak için kullanılır. 1-0 dönderir. copy("deneme.rar", "kopyalanacakdosya")
// rename(): dosya ismi değiştirmek için kullanılır. 1-0 dönderir.

