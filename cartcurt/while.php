<?php

function islem($bas,$bit)
{
    $sayi = array();
    while($bas<=$bit){
        $sayi[] = $bas;
        $bas++;
    }
    return $sayi;
    echo "<br> Bu ifade yazacak mı ?";

}
$sonuc = islem(1,500000);

foreach ($sonuc as $deger){
    echo $deger . " ";
}
echo "<br><br>";

$bellek = memory_get_usage();
echo "harcanan bellek $bellek byte" ;

?>

