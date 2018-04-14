
<?php

include 'display.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact V17</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
  <link rel="stylesheet" type="text/css" href="css/util1.css">
  <link rel="stylesheet" type="text/css" href="css/main1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<!--===============================================================================================-->
<style type="text/css">
  #user
  {
    text-align: center;
    margin-bottom: 30px;
    font-size: 40px;
  }
  .hello 
  {
   width:25%;
   float:left;


  }
 a
 {
  color: blue;
 }
 .far 
 {
  font-size: 40px;
  width:33.33%;
  float: right;
 }
 .fas
 {
  font-size: 40px;
  position: relative;
  left: 40px;
 }
 .nav
 {
  display: block;
 }
</style>
</head>
<body>

   <div class="container" >
        

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="Cart.php">Shop</a></li>
      <li><a href="Cart1.php">Cart</a></li>
      <li class="active"><a href="profile.php">Profile</a></li>
       <li><a href="wallet.php">Wallet</a></li>
        <li><a href="elec.php">Pay your bill</a></li>
       <li><a href="busreg.php">Book bus tickets</a></li>



    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
   
    </ul>
    </div>
  </nav>


  <div class="container-contact100">

    <div class="wrap-contact100">
      <form class="contact100-form validate-form">
        <span class="contact100-form-title">
          Your Profile   
        </span>

        <label class="label-input100" for="first-name"> Name:  <?php echo $_SESSION['name']; ?><div class="hello"></div><a href="update4.php">     UPDATE</a></label>
         <label class="label-input100" for="first-name"> Email-Id:  <?php echo $_SESSION['userid']; ?>
          <div class="hello "></div> <a href="update.php"> UPDATE</a>
         </label>
          <label class="label-input100" for="first-name"> Address:  <?php echo $_SESSION['address']; ?><div class="hello "></div><a href="update1.php">  UPDATE</a></label>
           <label class="label-input100" for="first-name"> Date of Birth:  <?php echo $_SESSION['dob']; ?><div class="hello "></div><a href="update2.php">UPDATE</a></label>
            <label class="label-input100" for="first-name"> Phone number:  <?php echo $_SESSION['phone']; ?><div class="hello"></div><a href="update3.php"> UPDATE</a></label>
            <a style="margin-top: 10px" href="update5.php">UPDATE PASSWORD</a>
           
       

       
      </form>


      <div class="contact100-more flex-col-c-m" style="background-image: url('http://buysellgraphic.com/images/graphic_preview/large/wealth_concept_background_wallet_credit_card_money_icons_32210.jpg');">
        <div id="user" style="color: white;">
            <?php echo "Welcome ".$_SESSION['name'];    ?>
          </div>

        <div class="flex-w size1 p-b-47">

          <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
          </div>
          

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Address
            </span>

            <span class="txt2">
              Amrita School of Engineering
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Lets Talk
            </span>

            <span class="txt3">
              +1 800 1236879
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              General Support
            </span>

            <span class="txt3">
              contact@paybuddy.com
            </span>
          </div>
        </div>
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
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

</body>
</html>




