<?php
// Start the sessio
ob_start();
//session_start();

?>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>PayBuddy</title>
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
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            
          </span>

          <div class="wrap-input100 " >
            <input class="input100" type="text" name="username"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder=" Update Username/email-id">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

        
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="update">
              Update
            </button>
          </div>
           <a style="color: white;" href="profile.php"><-Go back</a>


            
  

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
<script>


</script>
<?php

include 'display.php';
$u=$_SESSION['userid']; 
 $sql5="SELECT * FROM wallet where email='$u'";
 $result=mysqli_query($db,$sql5);
$row=mysqli_fetch_ASSOC($result);
$balance= $row['balance'];
$sup=$row['email'];

if(isset($_POST['update']))
{
  
if (isset($_POST['username']) and $_POST['username']!=" ") {
  $myuser=$_POST['username'];

 

  $sql="UPDATE login set email='$myuser' where email='$u'";

  if (mysqli_query($db, $sql)) {

    $_SESSION['userid']=$_POST['username'];
    $id=$_SESSION['userid'];
   
    $sql7="UPDATE wallet set email='$myuser' where email='$sup'";
   
    if (mysqli_query($db,$sql7)) {
      $r=0;
    }
    $sqle="UPDATE funds set email='$myuser' where email='$sup'";

    if (mysqli_query($db,$sqle)) {
      $r1=0;
    }
  
   

    
    header("location:profile.php");
} else {
    echo "<script type='text/javascript'>alert('Email id already exists');</script>";
}

  # code...
}






}

?>



  





  

   
  


  
</body>
</html>

