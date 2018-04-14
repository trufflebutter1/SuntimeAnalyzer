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

         <div class="wrap-input100 validate-input" style="margin-top: 15px;" data-validate="Please enter your phone number!">
            
            <input class="input100" type="tel" pattern="+\d{10}" name="phone" placeholder="Update your phone number">
            <span class=" " data-symbol="&#xf190;"></span>
          </div>

            <div>
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

  


<script type="text/javascript">
    $('form input[name="phone"]').blur(function() {
      var phone=$(this).val();
      var re=/\+\d{10}/;
      if (re.test(phone)) {
        $("#phonevalid").html("Valid phone number.");
      }
      else
      {
        $("#phonevalid").html("Not a vaid Phone number!");
      }



    })
  </script>




<?php
//include 'config.php';
include 'display.php';
if(isset($_POST['update']))
{

if (isset($_POST['phone']) and $_POST['phone']!=" ") {
  $phone=$_POST['phone'];
  $u=$_SESSION['userid'];
  $sql="UPDATE login set phone='$phone' where email='$u'";
  if (mysqli_query($db, $sql)) {
    $_SESSION['phone']=$_POST['phone'];
    header("location:profile.php");
    
} else {
    echo "Error updating record: " . mysqli_error($db);
}

  # code...
}






}

?>



  





  

   
  


  
</body>
</html>

