<?php

// veriyi değişkene değil belleğe depolar, bellekten döngü ile alabiliriz.
// opendir, readdir, closedir.
$dizin= "./";
$dizinac = opendir($dizin);


while (($oku = readdir($dizinac)) != false){
    $dosyami = filetype($dizin.$oku);
    if($dosyami =="file"){
        echo "klasör adı : " . $oku . "<br>";
    }

}

closedir($dizinac);