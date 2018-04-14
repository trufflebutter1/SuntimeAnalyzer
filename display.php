<?php
session_start();
include 'config.php';
$user=$_SESSION['userid'];
$sql = "SELECT * FROM login where  email='$user' ";//or 
//$sql = 'SELECT * FROM login';
   $retval = mysqli_query( $db,$sql );
   
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
  
      
  
   else
   {
   while($row = mysqli_fetch_array($retval, MYSQL_NUM)) {
   
     $_SESSION['name']=$row[2];
     $_SESSION['phone']=$row[3];
     $_SESSION['address']=$row[4];
     $_SESSION['dob']=$row[5];
     
     
     

    
     

     
    
   }
    
}


?>