<?php

    /* ceil() : Yukarıya yuvarlar.
     * floor() : Aşağı yuvarlar.
     * round() : En yakın tam sayıya yuvarlar.
     */

    $val1 = 8.01;
    $val2 = 8.5;
    $val3 = 8.23;

    echo "<h2>ceil</h2>";
    echo ceil($val1) ."<br>";
    echo ceil($val2) ."<br>";
    echo ceil($val3) ."<br>";
    echo "<hr>";

    echo "<h2>floor</h2>";
    echo floor($val1) ."<br>";
    echo floor($val2) ."<br>";
    echo floor($val3) ."<br>";
    echo "<hr>";

    echo "<h2>round</h2>";
    echo round($val1) ."<br>";
    echo round($val2) ."<br>";
    echo round($val3) ."<br>";
    echo "<hr>";

?>