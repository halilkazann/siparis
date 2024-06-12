<?php

    /*

    include() : Yeni dosyanın daha önce eklenip eklenmediği kontrol edilmez.
    Herhangi bir hata kodu dönecek olursa kodlar okunmaya devam eder.

    include_once() : Yeni dosyanın daha önce eklenip eklenmediği kontrol edilir.
    Herhangi bir hata kodu dönecek olursa kodlar okunmaya devam eder.

    require() : Yeni dosyanın daha önce eklenip eklenmediği kontrol edilmez.
    Herhangi bir hata kodu dönecek olursa kodlar okunmaya devam edilmez.

    require_once() : Yeni dosyanın daha önce eklenip eklenmediği kontrol edilir.
    Herhangi bir hata kodu dönecek olursa kodlar okunmaya devam edilmez.

    */

    echo "ilk satır" ."<br>";
    include ("test.php");


?>