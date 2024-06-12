<?php

$val = "halil";

echo gettype($val) ."<br>";

settype($val, "integer");

echo gettype($val) ."<br>";

settype($val, "array");

echo gettype($val);