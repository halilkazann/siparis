<?php
class halil_classi
{
    public $value1 = "halil kazan";
    private $value2 = "mustafa us";

    protected $value3 = "ahmet eren";

    static function value4()
    {

    }
    static function value5()
    {

    }
}
$_SESSION["halil"]="kazan";
$_GET["halil"]="kazan";
$_POST["kazannn"]="kazan";
$halil = "asasd";
$halil2 = "ss";
$halil23 = 123;
setcookie("halil","halil kazan");
$ibo = "1";

$test = "2";

$degisken = "3";
$degisken2 = "4";
$degisken3 = "6";
const HALIL = "halil";
const KAZAN = "kazan";

function deneme()
{

}

trait traitdeneme2
{

}
interface test
{

}
echo "<pre>";
print_r(get_defined_vars());

echo "<hr>";
print_r(get_defined_constants());

echo "<hr>";
print_r(get_defined_functions());

echo "<hr>";
print_r(get_declared_classes());

echo "<hr>";
print_r(get_declared_interfaces());

echo "<hr>";
print_r(get_declared_traits());


echo "<hr>";
print_r(get_class_vars("halil_classi")); // sadece public ve static olanlar döner.

echo "<hr>";
print_r(get_class_methods("halil_classi"));
