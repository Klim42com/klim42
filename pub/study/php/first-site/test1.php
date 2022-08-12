<?php
$categories = ['Klim'];
include '../../../../template/categories.inc.php';
echo "<hr/>";

function foo($var){
    return ++$var;
}
$a=5;
echo $a = foo(foo($a));
echo 10/9;
echo 10 % 9;