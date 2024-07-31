<?php

$str = 'PHP scalar type';
$message = "PHP data types";

echo $str;
echo $message;



$carts = [ 'laptop', 'mouse', 'keyboard' ];
print_r($carts);
echo $carts[0];
echo $carts[1];
echo $carts[2];

$prices = [
    'laptop' => 1000,
    'mouse' => 50,
    'keyboard' => 120
 ];
 echo $prices['laptop'];
 echo $prices['mouse']; 
 echo $prices['keyboard'];

 $arr = array(
    "foo" => "bar",
    "bar" => "foo",
 );
 print_r($arr);

 $arr = [
    "foo" => "bar",
    "bar" => "foo",
 ];


 class foo {
    function bar() {
       echo "Hello World."; 
    }
 }
 $obj = new foo;
 $obj->bar();