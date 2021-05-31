<?php

/*Declaring Numerical Array*/
$arr= array(1,2,3,4,5);

/*Declaring Associative Array*/
$arr1= array("Jainish"=>191213107006,"Ankit"=>191213107004,"Abhi"=>191213107005);

/*Printing Numerical array through print_r() function*/
print_r($arr);
echo"<br>";

/*Printing Associative array through print_r() function*/
print_r($arr1);

/*Printing numerical array through loop*/
for($i=0;$i<count($arr);$i++){
	echo"<br/>".$arr[$i];
}

/*Printing associative array through loop*/
foreach ($arr1 as $key => $value) {
	echo "<br>value is:$value<br>";
}

/*Sum printing*/
echo "<br><br>Sum of array is:".array_sum($arr);

/*array_count_values()*/
$newarr=array_count_values($arr);
foreach($newarr as $key=>$value)
{
	echo"<br>$key-<strong>$value</strong>";
}

/*Array Product*/
echo"<br><br>Array product is:".array_product($arr);

/*Reverse of array*/
$revarray=array_reverse($arr);
echo"<br><br>";
print_r($revarray);

/*in_array function*/
$temp=in_array(1,$arr);
echo "<br><br>$temp";

/*array_rand function*/
$index=array_rand($arr);
echo $arr[$index];

/*Select multiple keys at random*/
$indexofarray=array_rand($arr,2);
foreach($indexofarray as $key=>$value)
{
	echo"<br><br>$key-<strong>".$arr[$value]."</strong>";
}

/*array_unique()*/
echo"<br><br>";
print_r(array_unique($arr));

/*merge two arrays*/
$newarray=array_merge($arr,$arr1);
echo"<br><br>";
print_r($newarray);

?>