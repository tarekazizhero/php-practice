PHP ArithmaticOperators <br><br>
<?php
     $x=6;
     $y=7;
     echo $x+$y;  "<br>";  //addition
     echo  $x-$y . "<br>"; //subtraction
     echo $x*$y . "<br>"; // "multipication:" .
     echo  $x/$y . "<br>"; //"division:" .
     echo $x%$y . "<br>"; //"modulus:" . 
     echo  $x*$y . "<br>"; //"exponential:" 
?>
<br>
PHP assignment Operators 
<br>
<?php
    
    $x=20;
    echo $x . "<br>";
    echo  $x+=10 . "<br>";   //"addition:" .  $x=$x+10 
    echo  $x-=10 . "<br>"; //"Subtraction:" . $x=$x-10
    echo  $x*=10 . "<br>"; //"multipication:" .$x=$x*10
    echo  $x/=10 . "<br>"; //"division:" .   $x=$X/10
    echo  $x%=10 . "<br>"; //"modulus:" . $x=$X%10
    
?> 
<br><br>
PHP comparison Operators
<br><br>
<?php
    $x=100;
    $y=100;
    $z=95;

    var_dump($x==$y);    // equal              ==
    echo "<br>";
    var_dump($x===$y);  // identical         ===
    echo "<br>";
    var_dump($x!=$y) ;  // not equal          !=
    echo "<br>";
    var_dump($x<>$y) ;  // not equal         <>
    echo "<br>";
    var_dump($x!==$y);  // not identical      <>
    echo "<br>";
    var_dump($x>$z);        // not equal            >
    echo "<br>";
    var_dump($x<$y);        // not equal            <
    echo "<br>";
    var_dump($x>=$y);       // not equal         >=
    echo "<br>";
    var_dump($x<=$y) ;       // not equal         <=
    echo "<br>";
    var_dump($x<=>$z) ;         // not equal        <=>


?>
<br><br>
PHP increment / decerement 
<br>
<?php
     $x=10;
     echo ++$x . "<br>";  //increment output  11
     //echo $x++ . "<br">;  //post kincrement    10
     echo --$x . "<br>" ;  //decrement output  9 
     //echo $x-- . "<br">;  //post kincrement    10 
     
?>                                   
                                    

     