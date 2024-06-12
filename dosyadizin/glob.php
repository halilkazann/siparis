<?php

echo "<pre>";
print_r(glob("*"));
echo "<hr>";

echo "<pre>";
print_r(glob("/*")); // ana dizin (C)
echo "<hr>";

echo "<pre>";
echo "GLOB_MARK";
print_r(glob("*",GLOB_MARK)); //sadece klasör olanların sonuna ters slash koyar.
echo "<hr>";

echo "<pre>";
echo "GLOB_NOSORT";
print_r(glob("*",GLOB_NOSORT));  // sıralama yapmadan listeler
echo "<hr>";

echo "<pre>";
echo "GLOB_NOCHECK";
print_r(glob("*",GLOB_NOCHECK));  //
echo "<hr>";

echo "<pre>";
echo "GLOB_ONLYDIR";
print_r(glob("*",GLOB_ONLYDIR));  // sadece dizinler / en çok kullanılan
echo "<hr>";

echo "<pre>";
echo "GLOB_BRACE";
print_r(glob("*",GLOB_BRACE));  // en çok kullanılan
echo "<hr>";

echo "<pre>";
echo "GLOB_ERR";
print_r(glob("*",GLOB_ERR));  //
echo "<hr>";

echo "<pre>";
echo "GLOB_BRACE klasor1 içindeki";
print_r(glob("klasor1/*.txt",GLOB_BRACE));  // klasor1 içerisindeki sadece txt uzantılı listelemesi için
echo "<hr>";

echo "<pre>";
echo "GLOB_BRACE bulunduğu dizindeki";
print_r(glob("*.php",GLOB_BRACE));  // bulunduğu dizindeki sadece php uzantılı listelemesi için
echo "<hr>";

echo "<pre>";
echo "GLOB_BRACE bulunduğu dizindeki";
print_r(glob("*.{php,zip}",GLOB_BRACE));  // bulunduğu dizindeki hem php hem zip uzantılı listelemesi için
echo "<hr>";

echo "<pre>";
echo "GLOB_BRACE klasor1 içerisindeki a ile başlayan dosyalar <br>";
print_r(glob("./klasor1/a*",GLOB_BRACE));  // klasor1 içerisindeki a ile başlayan dosyaları listeler
echo "<hr>";