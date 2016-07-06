<?php
if(isset($_POST['submit'])){
    
  $kombinacija=$_POST['Kom'];
  
 if (mysql_connect("localhost","root", "")){
    mysql_select_db("loto");
    mysql_query("INSERT INTO broj(num) VALUES('$kombinacija')");
    echo 'broj je unesen u bazu';
 }
                                   
}


if(isset($_POST['generisi'])){
    
    $a= rand(1, 42);
    $b=  rand(1, 42);
    $c= rand(1, 42);
    $d= rand(1, 42);
    $f= rand(1, 42);
    $g= rand(1,42);
    
    $brojka= " $a  $b   $c  $d  $f  $g " ;
    
    echo "$brojka";
    
    if (mysql_connect("localhost","root", "")){
    mysql_select_db("loto");
    mysql_query("INSERT INTO broj(num) VALUES('$brojka')");
    echo ':D';
 }
    
    
                                   
}
