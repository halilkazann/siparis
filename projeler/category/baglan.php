<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=egitim;charset=UTF8","root","");


}catch (PDOException $hata){
    echo "bağlantı hatasıı" . $hata->getMessage();
    die;
}

?>