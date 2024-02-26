<?php

$var1 = 30;
$var2 = 20;

function checkScope(){
    global $var1;  //use globale variable value 30 
    $var2 = 100;          // use locally value  100
    echo "<br> inside function";
    echo "<br> use globale variable value 30 inside function because declare with global keyword".$var1;
    echo "<br>use locally value".$var2;
}

checkScope();
echo "<br> outside function:";
echo "<br>use globale variable value  ".$var1;  //use globale variable value 30 
echo "<br>use globale variable value ".$var2;  //use globale variable value 20 
?>