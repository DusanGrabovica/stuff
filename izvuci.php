<?php

    

    
    
 if (mysql_connect("localhost","root", "")){
     $rand2=  rand(33,42 );
  mysql_select_db("loto");
  $lmao=  mysql_query("SELECT * FROM broj
WHERE id= $rand2;");
   $values = mysql_fetch_array($lmao);
   $brojun=$values['num'];
   
   echo "$brojun";
 }
 
                                   

   
    
  
    
    
                                   

    
    
    


