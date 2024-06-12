<?php

$veri1= array(5,6,7);
$veri2= array(3,6,10);
function compareTriplets($a, $b) {
    $val1=0;
    $val2=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i]>$b[$i]) $val1++;
        if($b[$i]>$a[$i]) $val2++;
    }
    echo $val1 . ",". $val2;

}

$sonuc = compareTriplets($veri1,$veri2);
echo $sonuc;


?>