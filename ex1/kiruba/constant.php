<?php 

define('WIDTH','1140px');
echo WIDTH;


define( 'ORIGIN', [0, 0] );


const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price;


const RGB = ['red', 'green', 'blue'];


if(condition) 
{
    define('WIDTH', '1140px');
}
echo WIDTH;