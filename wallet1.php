

<?php
 $user=$_SESSION['userid'];
$sql="SELECT balance from wallet where email='$user'";
$result=mysqli_query($db,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
      	$_SESSION['bal']=$row['balance'];
      	echo'Rs.' .$row['balance'];

        

        }
        else
        {
        	echo 'Rs.0.0';
        }
   

?>
