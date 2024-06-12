<?php

    $zaman = date("d.m.Y H:i:s l");
    $zaman2 = date("d F Y l");
    $zaman3 = date("U"); // Zaman damgası
    $zaman4 = date("d.m.Y H:i:s l" ,1724796706); // zaman damgası çevirme

    echo $zaman ."<br>";
    echo $zaman2 ."<br>";
    echo $zaman3 ."<br>";
    echo $zaman4 ."<br>";
    echo time() ."<br>"; // zaman damgası
    echo mktime(15,20,55,12,8,1999) ."<br>"; // saat,dakika,saniye,ay,gün,yıl
    echo "<hr>";






?>

