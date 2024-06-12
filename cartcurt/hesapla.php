<?php

$sayi1 = $_POST["sayi1"];
$sayi2 = $_POST["sayi2"];
$islem = $_POST["islem"];



    switch (!empty($sayi1) && !empty($sayi2) && !empty($islem)){

        case $islem =="topla":
        $sonuc = $sayi1+$sayi2;
        break;

        case $islem =="çıkart":
        $sonuc = $sayi1-$sayi2;
        break;

        case $islem =="çarp":
        $sonuc = $sayi1*$sayi2;
        break;

        case $islem =="böl":
        $sonuc = $sayi1/$sayi2;
        break;

    }

        echo "yaptığın işlem $islem işlemidir. Sonucu : " . $sonuc ;
    

?>