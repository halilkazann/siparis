<?php

sleep(6);
// belirtilen değer için azami/maksimum çalışma süresi atanır.
echo ini_get("max_execution_time") . "<br>";
set_time_limit(5); // saniye değeri
echo ini_get("max_execution_time") . "<br>";

$sayi = 0;
while ($sayi <100){
    echo $sayi . " ";
    $sayi++;
}
