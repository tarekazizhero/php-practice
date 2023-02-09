<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    arry function <br>
    <?php
     $arr=array(1,'char','aziz');
     $arrlength=count($arr);
     for($x=1; $x<$arrlength;$x++){
        echo $arr[$x] . "<br>";
     }




     
     echo "<pre>";
     print_r ($arr);
     echo "</pre>";
     ?> 
</body>
</html>