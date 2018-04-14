<?php
$user=$_SESSION['userid'];
$sql="SELECT * FROM funds where email='$user' ";
 $result=mysqli_query($db,$sql);
if (mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result))
                      {
                        
                       echo $row['fundname'].", ";



                      }

}


?>