<?php
    $myString ="this is a texT book";
    echo strtoupper($myString) . "<br>"; //all are the capital letter
    echo strtolower($myString) . "<br>"; //all are letter be smalled
    echo ucwords($myString) . "<br>"; //proty ti word er first letter capital hba 
    echo ucfirst($myString) . "<br>"; //sentece er 1st word er 1st letter capital hbe 
    echo trim($myString, "ok") . "<br>"; //remove null,"\n",defined charecter

    echo "strlen:" . strlen($myString) . "<br>"; //ktogula string ace
    echo "strstr:" . strstr($myString, "a") . "<br>"; //str jeta set korbo then poer word gulo show korbe
    echo "strReplace:" . str_replace("is","are",$myString);// (remove str,add str,variavle)sentece a ja kisu replace korte cai
    

?>