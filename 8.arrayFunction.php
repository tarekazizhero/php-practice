<?php



 $arr=[1,6,4,9,4,3,1,6];

 echo "<pre>";
 print_r ($arr);

 sort($arr);
 print_r ($arr);  //assending sort kore dekabe

 rsort($arr);
 print_r ($arr); //dessending sort kore dekabe


 echo "count:" . count($arr). "<br>";
 echo "min:" . min($arr) . "<br>";
 echo "max:" . max($arr) . "<br>";
 echo "implode:" . implode("*",$arr). "<br>";

 echo "9:" . in_array(9,$arr). "<br>"; //array tir value ace kina ta cheack kore
echo "6:" . in_array(6,$arr). "<br>";
 echo "</pre>";
 

?>