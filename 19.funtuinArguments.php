<?php
    function familyname($name){   //single arguments pass
        echo "$name family member <br>";
    }
    familyname("tarek is a");
    familyname("atik is a ");
    familyname("yousuf is a ");
?>

<?php
    function familyMembers($name,$year){     //multiple arguments pass
        echo "$name family member " . "born in $year" . "<br>";

    }
    familyMembers("tarek is a",1996);
    familyMembers("yousuf is a",2002);
    familyMembers("atik is a ",1991);
?>