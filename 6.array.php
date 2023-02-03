<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stuff=array(3,2,6,1,9);
        $stuff2=array('book','job',2,'food',9,array('hae','wow'));
        echo $stuff[1] . "<br>";
        echo $stuff2[3] . "<br>";
        echo $stuff2[5][0] . "<br>";
        
        echo "<pre>";
        print_r($stuff2);
        echo "</pre>";


    ?>
    

</body>
</html>