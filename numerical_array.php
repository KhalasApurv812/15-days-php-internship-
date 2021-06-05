<?php

//Method 1

$a[0] = 10;
$a[1] = 20;
$a[2] = 30;
$a[3] = "C";
$a[4] = "C++";
$a[5] = 50.50;

//Method 2//Dynamic array

$a[] = 10;
$a[] = 20;
$a[] = 30;
$a[] = "C";
$a[] = "C++";
$a[] = 50.50;

//Method 3

$a = array(10,20,30,"C","C++",50.50);


echo $a[3];

for($i=0;$i<count($a);$i++)
{
    echo "<br/>".$a[$i];
}    
    
$sum = array_sum($a);
echo $sum;
echo"<pre>";
print_r($a);
 
var_dump($a);
echo"<pre>";