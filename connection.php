<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cornerstone";

 $con = new mysqli($servername,$username,$password,$dbname);

 if($con) 
 {
     
 }
 else
 {
     echo "not connected";
 }
  
?>