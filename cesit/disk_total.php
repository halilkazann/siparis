<?php

/*
 *  disk_total_space()   : Toplam disk kapatisesini byte olarak döndürür.
 *  disk_free_space()    : Kullanbilir disk kapatisesini byte olarak döndürür.
 *  memory_get_usage()   : Çalışan php dosyası için ayrılan memory miktarını byte olarak döndürür.
 */

echo disk_total_space("C:/") ."<br>";
echo disk_total_space("D:/") ."<br>";
echo disk_total_space("/") ."<br>";
echo disk_free_space("/") ."<br>";
echo memory_get_usage(). "<br>"; // byte
echo memory_get_usage() /1024/1024 . "<br>";