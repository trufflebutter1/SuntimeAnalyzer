<?php
include 'config.php';
session_start();


?>

<html lang="en">
<head>
  <title>Electricity bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        
        input[type=text] {
    background-color: deepskyblue;
    color: white;
           border: 1px solid #ccc;
    border-radius: 4px;
            padding: 10px 40px;
    text-decoration: none;
    margin: 4px 2px;
}
        input[type=submit] {
    background-color: deepskyblue;
    border: none;
    color: white;
    padding: 05px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
        .back{
            background-color:white;
        }
    </style>
    </head>
    <body>

     <div class="container-fluid" style="width: 100%">
        

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">PAY YOUR ELECTRICITY BILL</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Cart.php">Shop</a></li>
      <li><a href="Cart1.php">Cart</a></li>
      <li><a href="profile.php">Profile</a></li>
       <li><a href="wallet.php">Wallet</a></li>
       <li class="active"><a href="elec.php">Pay your bill</a></li>
       <li><a href="busreg.php">Book bus tickets</a></li>



    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
  </ul>
</div>
</nav>
    <div class="container well back">

            
    <h2>  Pay your electricity bill</h2><br>
    <form method="POST" action="">
         SUB DIVISION ID:
         <br>
        <input type="text" name="AccountID" pattern="^[1-9][0-9]{0,2}$"  required=""><br>
        
         AccountID:<br>
        <input type="text" name="AccountID" pattern="^[0-9]{3,5}$" required=""><br>
       
         Number of units consumed:<br>
        <input type="text" name="unit" required=""><br>
                           <br>   <button  name="but" class="btn btn-info" role="button" style="padding:15px 40px">Pay Now<br></button>
                         </form>
                         <?php
                         if (isset($_POST['but'])) {

                         	$unit=$_POST['unit'];
                         	if ($unit<=199) {
                         		$total=$unit*1.20;
                         		$_SESSION['elec']=$total;
                         		header('location:econfirm.php');
                         	}
                         	elseif ($unit>=200 && $unit<400) {
                         		$total=$unit*1.50;
                         		$_SESSION['elec']=$total;
                         		header('location:econfirm.php');
                         	}
                         	elseif ($unit>=400 && $unit<600) {
                         		$total=$unit*1.80;
                         		$_SESSION['elec']=$total;
                         		header('location:econfirm.php');
                         	}
                         	else
                         	{
                         		$total=$unit*2.00;
                         		$_SESSION['elec']=$total;
                         		header('location:econfirm.php');
                         	}
                         }




                         ?>


    </body>
</html>