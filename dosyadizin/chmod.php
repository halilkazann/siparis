<?php

    // chmod() : dosya izinlerinin yönetimi sağlanır. İşlem sonucunda 1-0 döner

    $dosya = "test.zip";
    $izinler = fileperms($dosya);

    echo "erişim izni" . $izinler ."<br>";

    $bicimlendir =sprintf("%o",$izinler);
    echo $bicimlendir . "<br>";
    echo substr($bicimlendir,-4) . "<br>";

    chmod($dosya,0777);
 ?>