<?php

echo "<pre>";
print_r(parse_ini_file("halil.ini"));
echo "<hr>";

print "<pre>";
print_r(php_ini_loaded_file());

print "<hr>";
print_r(ini_get_all());


print "<hr>";
print_r(ini_get_all("mysqli",0));

echo "<hr>";
echo ini_get("display_errors"). "<br>";
ini_set("display_errors",0);
echo ini_get("display_errors"). "<br>";
ini_restore("display_errors");
echo ini_get("display_errors"). "<br>";
echo "<hr>";

