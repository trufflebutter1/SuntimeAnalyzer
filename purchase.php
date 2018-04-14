<?php
session_start();
ob_start();
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V3</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form  class="login100-form validate-form" method="POST" >
          <span class="login100-form-logo">
            <i class=" fas fa-credit-card"></i>

          </span><br>
           <h5>Select your mode of payment</h5><br>


        <input type="radio" name="wallet">Wallet<br><br>
         <input type="radio" name="savings">Savings account<br><br>
          <input type="radio" name="credit">Credit Card<br><br>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="pay">
              PAY
            </button>
        </div>

        
        <a href="confirm.php" style="color: black; text-decoration: underline;" >Go back</a>


   
        

          </div>


         
          
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  


</body>


<?php


include 'config.php';
$tot=$_SESSION['total'];
echo $tot;
if(isset($_POST['pay'])){
if (isset($_POST['wallet'])) {
	$bal=$_SESSION['bal'];

  $tot=$_SESSION['total'];
	
	$u=$_SESSION['userid'];
	
	
	if($bal>=$tot)
	{
		$sub=$bal-$tot;
		
		$sql="UPDATE wallet set balance='$sub' where email='$u'";
		$sql1="SELECT balance from wallet where email='$u'";
$result=mysqli_query($db,$sql1);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $_SESSION['bal']=$row['balance'];
		if(mysqli_query($db,$sql))
		{
	foreach ($_SESSION["cart"] as $keys => $value){
                
                    unset($_SESSION["cart"][$keys]);
                  
                }
                header('location:Cart.php');



		}
	}
	elseif ($bal<$tot || $bal>0) {
		echo $tot;
		echo $bal;
		$t=$tot-$bal;
		echo $t." ";
		$_SESSION['rem']=$t;
		$sql9="UPDATE wallet set balance=0 where email='$u'";
		if(mysqli_query($db,$sql9))
		{
			echo '<script type="text/javascript">

          window.onload = function () { alert("Please select a source of fund to pay the remaining amount"); }

</script>';
		}
        if(isset($_POST['savings'])){

          if (isset($_POST['pay'])) {
          	$rem=$_SESSION['rem'];

          $sql1="SELECT * from funds where email='$u'and fundname='Savings account'";
          $result=mysqli_query($db,$sql1);
           $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
           $cash=$row['cash'];
           if($cash<$rem||$cash==0)
           {
           	echo '<script type="text/javascript">

          window.onload = function () { alert("Not enough funds"); }

           </script>';
           }
           else
           {
           	$ch=$cash-$rem;
           	$sql7="UPDATE funds set cash='$ch' where email='$u' and fundname='Savings account'";
           	if(mysqli_query($db,$sql7))
           	{
              foreach ($_SESSION["cart"] as $keys => $value){
                
                    unset($_SESSION["cart"][$keys]);
                  
                }
                header('location:Cart.php');



            }
           	else echo "Savings account doesnt exist";

           }



          	# code...
          }
      }
           if(isset($_POST['credit'])){

          if (isset($_POST['pay'])) {
          	$rem=$_SESSION['rem'];
          	echo $rem;

          $sql1="SELECT * from funds where email='$u'and fundname='Credit Card'";
          $result=mysqli_query($db,$sql1);
           $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
           $cash=$row['cash'];
           if($cash<$rem||$cash==0)
           {
           	echo '<script type="text/javascript">

          window.onload = function () { alert("Not enough funds"); }

           </script>';
           }
           else
           {
           	$chui=$cash-$rem;
           	echo $cash;
           	echo " ".$chui;
           	$sql7="UPDATE funds set cash='$chui' where email='$u' and fundname='Credit Card'";
           	if(mysqli_query($db,$sql7)){


           	foreach ($_SESSION["cart"] as $keys => $value){
                
                    unset($_SESSION["cart"][$keys]);
                  
                }
               // header('location:Cart.php');
           	}


           

           }



          	# code...
          }
      





      


















        }




	}

		



		
	}
}



if (isset($_POST['credit'])) {
	if (isset($_POST['pay'])) {
		 $tot=$_SESSION['total'];
	$u=$_SESSION['userid'];
	$sql4="SELECT * from funds where email='$u' and fundname='Credit Card'";
	 $result=mysqli_query($db,$sql4);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      $c=$row['cash'];
      if($c>0&&$c>=$tot)
      {
      	$diff=$c-$tot;
      	$sqll="UPDATE funds set cash='$diff' where email='$u' and fundname='Credit Card'";
      	if (mysqli_query($db,$sqll)) 
      	{
      		foreach ($_SESSION["cart"] as $keys => $value){
              
                    unset($_SESSION["cart"][$keys]);
                  
                }
                header('location:Cart.php');
      	
      		# code...
      	
      }
      else
      {
      	echo '<script type="text/javascript">

          window.onload = function () { alert("Not enough funds.Chose another fund"); }

           </script>';
      }





		# code...
	}
	# code...
}

if (isset($_POST['savings'])) {
	if (isset($_POST['pay'])) {
		 $tot=$_SESSION['total'];
	$u=$_SESSION['userid'];
	$sql4="SELECT * from funds where email='$u' and fundname='Savings account'";
	 $result=mysqli_query($db,$sql4);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $c=$row['cash'];
      if($c>0&&$c>=$tot)
      {
      	$diff=$c-$tot;
      	$sqll="UPDATE funds set cash='$diff' where email='$u' and fundname='Savings account'";
      	if (mysql_query($db,$sqll)) 
       {
          foreach ($_SESSION["cart"] as $keys => $value){
                
                    unset($_SESSION["cart"][$keys]);
           header('location:Cart.php');
         
       }


       }
      	else echo "Savings account doesnt exist";
      		# code...
      	
      }
      else
      {
      	echo '<script type="text/javascript">

          window.onload = function () { alert("Not enough funds.Chose another fund"); }

           </script>';
      }





		# code...
	}
	# code...
}
}










?>

</body>
</html>