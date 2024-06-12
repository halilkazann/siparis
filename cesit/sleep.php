<?php

/*
 *  sleep() : tüm kodların belirtilecek olan saniye sonrasında çalıştırır.
 *  usleep()  : aynı işlemi mikrosaniye olarak sağlar.
 *  time_nanosleep() : tüm kodların belirtilen saniye ve nanosaniye kadar bekletir.
 * time_sleep_until() : belirtilen unix zaman damgası geçerli zamanaına bekleterek çalıştırır.
 */

//sleep(3);
echo "halil kazan";
print "<hr>";

echo date("h:i:s") . "<br>";
sleep(2);
echo date("h:i:s") . "<br>";