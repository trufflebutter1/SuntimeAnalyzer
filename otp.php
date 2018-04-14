
<?php
ob_start();
session_start();
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
          

          
          <div class="wrap-input100 validate-input" data-validate = "Enter otp">
            <input class="input100" type="text" placeholder="Enter otp" name="otp1" required="" >
             <span class="" data-placeholder="&#xf207;"></span>
          </div>

        
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="verify">
             Verify
            </button>
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

<?php
 $conn=mysqli_connect('localhost','root','','project1');
$o=$_SESSION["otp"];
echo $o;

 
if (isset($_POST['verify'])) {

  $otp1=$_POST['otp1'];

   if($otp1==$_SESSION["otp"])
   {

  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  $password=$_SESSION["password"];
  $phone=$_SESSION["phone"];
  $dob=$_SESSION["dob"];
  $address=$_SESSION["address"];

      $sql = "INSERT INTO login values('$email','$password','$name','$phone','$address','$dob')";
       $sql1="INSERT into wallet values('$email','10000')";
 
  if(mysqli_query($conn,$sql) )
  {
   
  if(mysqli_query($conn,$sql1))
  {

header("location:login.php");


  }
}
  else
die(mysqli_error($conn));



}
else
{
  echo '<script language="javascript">';
echo 'alert("Invalid otp")';
echo '</script>';
}




   }

    
  # code...




?>








  

   
  


  
</body>
</html>

