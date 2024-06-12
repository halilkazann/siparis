<?php

    // belirtilen dizindeki tüm dosyaları listeler.
        echo "<pre>";
        $i=0;
        foreach (scandir("./") as $dosya){
            if($dosya !="." && $dosya !=".."){
                echo "[".$i."] => " .$dosya . "<br>";
                $i++;
            }
        }

        // 1 değeri verilirse tersten sıralar.
        echo "<hr>";
        $i=0;
        foreach (scandir("./" ,1) as $dosya) {
            if ($dosya != "." && $dosya != "..") {
                echo "[" . $i . "] => " . $dosya . "<br>";
                $i++;
            }
        }