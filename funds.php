<!DOCTYPE html>
<html>
<head>
	<title>Funds</title>
	<style type="text/css">
     form
     {
     	text-align:justify;
     	margin:40px 40px;
     	padding:40px;

     }
     body
     {
     	background-color: deepskyblue;
     }

	</style>

</head>

<body>





<?php
session_start();
include('config.php');
 //$bal=$_SESSION['bal'];



               

$user=$_SESSION['userid'];
$sql="SELECT * FROM funds where email='$user' ";
 $result=mysqli_query($db,$sql);
if (mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result))
                      {  
                         echo '<br>';
                         if($row['fundname']=="Savings account"){
                       echo'<form method="POST">';
                       echo "Maximum Amount That Can Be Entered is 10000";
                       echo '<br>';
                       echo '<br>';
                       echo $row['fundname']." ";
                        echo'<input type="number" name="amt" min="1" max="10000"  placeholder="Enter amount to be added">';
                        echo'<button type="submit" name="add" >Add</button>';
                        
                        $_SESSION['sup']=$row['fundname'];
                        echo '<br>';
                        echo '<br>';

                    }
                    elseif ($row['fundname']=="Credit Card") {

                    	echo'<form method="POST">';
                       echo $row['fundname']." ";
                        echo'<input type="number" min="1" max="10000"  name="amt1" placeholder="Enter amount to be added">';
                        echo'<button type="submit1" name="add1">Add</button>';
                        echo '<br>';
                        echo '<br>';
                        echo'<a href="wallet.php">Go Back to Wallet</a>';

                        $_SESSION['sup1']=$row['fundname'];
                        echo '<br>';
                    }




                      }
                  }

               if(isset($_POST['add']))
               {   // $m=$_POST['amt'];
                  if(isset($_POST['amt']))
                  {
                      $m=$_POST['amt'];
                      $sql="SELECT balance from wallet where email='$user'";
                      $result=mysqli_query($db,$sql);
                      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                     // $u=$_SESSION['userid'];
                      $bal=$row['balance'];
                     
                     
                      $total1=$m+$bal;
                      echo $total1;

                      $sql1="UPDATE wallet set balance='$total1' where email='$user'";
                    if(mysqli_query($db,$sql1))
                    {
                    	header('location:wallet.php');

                    }
                    else
                    {
                    	echo "no";
                    }
                    $sup=$_SESSION['sup'];
                    $sql2="SELECT*FROM funds where email='$user' and fundname='$sup'";
                    $result=mysqli_query($db,$sql2);
                    $row=mysqli_fetch_assoc($result);
                    $diff=$row['cash']-$m;
                   $sql8= "UPDATE funds set cash='$diff' where email='$user' and fundname='$sup' ";
                   if(mysqli_query($db,$sql8))
                   {
                   	header('location:wallet.php');
                   }
                   else
                   	echo"no";

                   

                  }

 }




               if(isset($_POST['add1']))
               {    
                  if(isset($_POST['amt1']))
                  {
                     $m=$_POST['amt1'];
                     echo $m;
                      $sql="SELECT balance from wallet where email='$user'";
                      $result=mysqli_query($db,$sql);
                      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                      $u=$_SESSION['userid'];
                      $bal=$row['balance'];
                     
                     
                      $total1=$m+$bal;
                      echo $total1;

                      $sql1="UPDATE wallet set balance='$total1' where email='$u'";
                    if(mysqli_query($db,$sql1))
                    {
                    	echo "yes";
                    }
                    else
                    {
                    	echo "no";
                    }
                    $sup=$_SESSION['sup1'];
                    $sql2="SELECT*FROM funds where email='$user' and fundname='$sup'";
                    $result=mysqli_query($db,$sql2);
                    $row=mysqli_fetch_assoc($result);
                    $diff=$row['cash']-$m;
                   $sqlo= "UPDATE funds set cash='$diff' where email='$user' and fundname='$sup' ";
                   if(mysqli_query($db,$sqlo))
                   {
                   	header('location:wallet.php');
                   }
                   else
                   	echo"no";

                   

                  }

 }





?>
</body>
</html>