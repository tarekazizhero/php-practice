
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number</title>
</head>
<body>
    <h2>number system</h2>
<?php
$numbers=78;
echo $numbers . "<br>";
echo 2*9+4/11-5 . "<br>";

echo "random number:" . rand() .  "<br>";
echo "random number between:" . rand(0,6) . "<br>";
echo "modulo:" . fmod(40,4) . "<br>";
echo "squre root:" .sqrt(100) . "<br>";
echo "absulate value:" . abs(-100) . "<br>";
?>
<h2>incrementing and decrementing</h2>
<?php
    $num=10.6;
    echo $num;
    echo $num+=2 . "<br>";  //$num=$num+2
    echo $num-=2 . "<br>";  //$num=$num-2
    echo $num/=2 . "<br>";  //$num=$num/2
    echo $num*=2 . "<br>";  //$num=$num*2
?>
<H2>Floating numbers</H2>
<?php
    $float=10.51;
    echo $float . "<br>";
    echo $float+ 4 ."<br>";
    echo ceil($float) . "<br>";
    echo floor($float) . "<br>";
    echo round($float) . "<br>";

?>
<h2>intejer,float, numeric type</h2>
<?php 
    $Float =20;
    echo "Intejer=" . is_int($Float) . "<br>";
    echo "Float=" . is_float($Float) . "<br>";
    echo "Numeric" . is_numeric($Float) . "<br>";

    /* zero(0) or null means false
    and one(1) means true */
?>


</body>
</html>