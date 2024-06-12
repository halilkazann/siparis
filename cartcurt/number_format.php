<?php

    $number= 1023902.23453;

    echo $number ."<br>";

    // number_format methodu kullanıldığında 2. değer olarak
    // gönderilen sayısal ifadeye göre küsürat uzunluğu alınır.
    // 3 gönderilen değer ve 4. gönderilen değerle küsüratı nokta yerine virgül ile gösterilir.
    // sayıyı yukardaki halden 1.023.902,2345 bu hale çevirir.
    //3. değer küsürat için kullanılan değer, 4. gönderilen değer binlik ayracı olarak kullanılan değer

    $format = number_format($number,4 ,",",".");

    echo $format;

?>