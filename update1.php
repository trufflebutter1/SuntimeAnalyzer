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
        <form  class="login100-form validate-form" method="POST" enctype="multipart/form-data" >
          <span class="login100-form-logo">
            <i class=" fas fa-credit-card"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            
          </span>

         <div class="wrap-input100 validate-input" style="margin-top: 15px;" data-validate="Address is required">
            
            <textarea class="input100" type="text" name="address" placeholder="Update your address " maxlength="100"></textarea><div class="proof">< <input type="file" name="fileToUpload" id="fileToUpload" required="">
          </div>
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
//include 'config.php';

include 'display.php';
if(isset($_POST['update']))
{

$target_dir = "uploads/";
$filestoupload=$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($filestoupload);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       $image_base64 = base64_encode(file_get_contents($filestoupload) );
  $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
  // Insert record
  $query = "INSERT into images(image) values('".$image."')";
  mysqli_query($con,$query);

        if (isset($_POST['address']) and $_POST['address']!=" ") {
  $myaddress=$_POST['address'];
  $u=$_SESSION['userid'];
  $sql="UPDATE login set address='$myaddress' where email='$u'";
  if (mysqli_query($db, $sql)) {
    $_SESSION['address']=$myaddress;

    header("location:profile.php");
} else {
    echo "Error updating record: " . mysqli_error($db);
}

  # code...
}

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}








}

?>



  





  

   
  


  
</body>
</html>

