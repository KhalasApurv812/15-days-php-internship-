<?php

//Mathod 1  
$a[0] = 10;
$a['A'] ="Apurv";
$a['php'] = "Web Devlopment";
$a['K'] = "Khalas";
$a[2] = "Two";
$a[50] = 50.50;

//Method 2
 $a = array(
     0=> 10,
     "A"=> "Apurv",
     "php"=> "Web Devlopment",
     "K"=> "Khalas",
     2=> "Two",
     50=> 50.50,
 );
 
 
 //Method 3
 $a = array(10,"Apurv","Web Devlopment","Khalas","Two",50.50);
 
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


