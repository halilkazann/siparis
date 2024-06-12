<?php

echo "geçerli dizin : ". getcwd() . "<br>"; // geçerli dizini döndürür.

chdir("klasor2/");

echo "değişen dizin : ". getcwd() . "<br>"; // geçerli dizini döndürür.

$test = chdir("klasor3/");

// echo "chdir paramtreye atandığında dizin : ". $test . "<br>"; // 2. kez kullanıldığında hata alınıyor boolean 1-0 değeri döndürür.
