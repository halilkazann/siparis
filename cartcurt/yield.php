<?php

function islem($bas,$bit)
{
    while($bas<=$bit){
        yield $bas;
        $bas++;
    }
}

$sonuc = islem(1,500000);

foreach ($sonuc as $deger){
    echo $deger . " ";
}
echo "<br><br>";

$bellek = memory_get_usage();
echo "harcanan bellek $bellek byte" ;

?>

