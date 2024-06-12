<?php
include_once("baglan.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        function kategori($deger=0){
            global $con;
            $sorgu = $con->prepare("Select * from kategori where ust_id = ?");
            $sorgu->execute([$deger]);
            $sayi = $sorgu->rowCount();
            $category = $sorgu->fetchAll(PDO::FETCH_ASSOC);

            if($sayi >0 ){
                foreach($category as $cat){
                    echo $cat["adi"] . "<br>";
                }

            }



        }
        kategori();

    ?>
</body>
</html>