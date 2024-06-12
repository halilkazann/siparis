<?php

/*
 *  extends : Bir sınıfı başka bir sınıftan türetmek için kullanılır.
 *  final : en son kullanılan sınıftır.
 *


*/

abstract class tema
{
    abstract public function header($renk,$logo,$banner);
    abstract public function body($icerik);
}

class ust extends tema
{
     public function header($renk,$logo,$banner){

    }

     public function body($icerik){

    }
}
