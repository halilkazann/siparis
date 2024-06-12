<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=siparis;charset=utf8","root","");
}catch (PDOException $hata){
    echo $hata->getMessage();
}

?>