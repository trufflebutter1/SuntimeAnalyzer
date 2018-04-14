<?php
// Start the sessio
ob_start();
session_start();

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
<style type="text/css">
  a
  {
    color: black;
  }
</style>
</head>
<body>
  
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form  class="login100-form validate-form" method="POST" >
         

          <span class="login100-form-title p-b-34 p-t-27">
            
          </span>

         <div class="wrap-input100">
           <?php  
           $e=$_SESSION['elec'];
           echo '<a href="elec.php"><-Go back</a><br>';
           echo "Bill amount : Rs.".$e;
           if (isset($_POST['noi'])) {
    # code...

if(isset($_POST['HROJSF']) ) {
    $total=$e-($e*0.2);
     $_SESSION['elec']=$total;
     header('location:econfirm.php');

      
} else {
     echo "error";
}
}

if (isset($_POST['noi'])) {
    # code...

if(isset($_POST['asozul']) ) {
    $total=$e-($e*0.12);
     $_SESSION['elec']=$total;
      header('location:econfirm.php');

      
} else {
     echo "error";
}
}

if (isset($_POST['noi'])) {
    # code...

if(isset($_POST['erenof']) ) {
    $total=$e-($e*0.15);
     $_SESSION['elec']=$total;
      header('location:econfirm.php');

      
} else {
     echo "error";
}
}
if (isset($_POST['pay'])) {

  header('location:epurchase.php');
}







              ?>
          
          </div>
          <form method="POST">

                       Promo codes:<br>
                       <input type="radio" name="HROJSF">HROJSF<br>
                       <input type="radio" name="asozul">ASOZUL <br>
                       <input type="radio" name="erenof">ERENOF<br> 
                       <button name="noi">Apply</button>
                     

            <div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="pay">
              PAY
            </button>

          </div>
        </div>
          </div>
        </form>





            
  

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
</html>

