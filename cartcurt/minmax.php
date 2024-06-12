<?php

    //min()  : en küçük rakamsal değer
    //max()  : en büyük rakamsal değer

    // min ve max kullanımda string kullanılmaz. Hata alınır.

    $rakamlar = array(12,34,64,7534,43,2231,7443,22241);

    echo "<pre>";
    print_r($rakamlar);

    echo "En küçük değer " . min($rakamlar) . "<br>";
    echo "En büyük değer "  . max($rakamlar) . "<br>";

    echo "<hr><br><br>";

    // dizi kullanmdan da eldeki verileri sıralayabiliriz

    echo "En küçük değer " . min(12,34,64,7534,43,2231,7443,22241) . "<br>";
    echo "En büyük değer "  . max(12,34,64,7534,43,2231,7443,22241) . "<br>";
?>