<?php
 ob_start();
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <style type="text/css">
    .button {
  background:linear-gradient(180deg, #2af598 0%, #009efd 100%);
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  width: 25%;
  float: right;
  position: relative;
  bottom: 40px;
}

.button:hover {opacity: 1}
  </style>
  
  
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
  <link rel="stylesheet" type="text/css" href="util.css">
  <link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: linear-gradient(180deg, #2af598 0%, #009efd 100%);">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <form id="register" class="login100-form validate-form" method="POST"  >
          <span class="login100-form-title p-b-49">
            Register
          </span>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required!">
            
            <input class="input100" type="text" name="name"  placeholder="Enter your full name">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required!">
            
            <input  id="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" class="input100" type="text" name="email" placeholder="Enter your email">
            <span class="focus-input100" data-symbol="&#xf206;">
          </div>
          <div id="emailmatch"></div>


          <div class="wrap-input100  validate-input"  data-validate="Password is required!">
            
            <input id="password1" class="input100" type="password" name="pass" placeholder="Type your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>
          <div class="wrap-input100 validate-input" style="margin-top: 15px;" data-validate="Confirm your password!">
            
            <input class="input100" id="password2"  type="password" name="pass1" placeholder="Confirm Password" onChange="checkPasswordMatch();">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>
          <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>

         


          <div class="wrap-input100 validate-input" style="margin-top: 15px;" data-validate="Enter your date of birth">
            
            <input class="input100" type="text" name="dob" placeholder="dd-mm-yyyy or dd/mm/yyyy " pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$">
            <span class=" " data-symbol="&#xf190;" ></span>
          </div>

          <div class="wrap-input100 validate-input" style="margin-top: 15px;" data-validate="Address is required">
            
            <textarea class="input100" type="text" name="address" placeholder="Enter your address " maxlength="100"></textarea>
          </div>
          
           <div class="wrap-input100 validate-input" style="margin-top: 15px;" data-validate="Please enter your phone number!">
            
            <input class="input100" type="text" pattern="+\d{10}" name="phone" placeholder="Enter your phone number">
            <span class=" " data-symbol="&#xf190;"></span>

            <div>
            <button type="text" class="button" name="save" >
              Send OTP
            </button>
            </div>
          </div>

          <div id="phonevalid"></div>
          


             

          
      

          
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

  <script type="text/javascript">
  function checkPasswordMatch() {
    var password = $("#password1").val();
    var confirmPassword = $("#password2").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#password2").keyup(checkPasswordMatch);
});
  </script>
  <script type="text/javascript">
    

    $('form input[name="email"]').blur(function () {
    var email = $(this).val();
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
if (re.test(email)) {
   $("#emailmatch").html("Valid email-id.");
    
} else {
   $("#emailmatch").html("Not a valid email-id!");
    
}

});
  </script>
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
//print_r($_POST);die;
  $conn=mysqli_connect('localhost','root','','project1');

  
   if(isset($_POST['save'])){
     $name=$_POST['name'];
  $email=$_POST['email'];
  $password=md5($_POST['pass']);
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $address=$_POST['address'];
  $query = "SELECT * FROM login WHERE email='$email'";
  $result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if ($count>0) {
 echo "<script type='text/javascript'>alert('Sorry! This email-id already exists');</script>";
}
else{

  $username = "YourUsername";
  $hash = "YourHashKey";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = $_POST['phone']; // A single number or a comma-seperated list of numbers
  $otp=rand(1000,99999);
  $message = "Your otp is".$otp;
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  $_SESSION["otp"] = $otp;
  $_SESSION["name"]=$name;
  $_SESSION["email"]=$email;
  $_SESSION["password"]=$password;
  $_SESSION["phone"]=$phone;
  $_SESSION["dob"]=$dob;
  $_SESSION["address"]=$address;

  header("location:otp.php");

  


}
}
  
 

 





?>



  
  
</body>
</html>
