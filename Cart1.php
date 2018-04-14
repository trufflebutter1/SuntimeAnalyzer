
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	 <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script type="text/javascript">
      $("input[name='confirm']").click(function () {
    $('.order').css('display', ($(this).val() == 'a') ? 'block':'none');
});
</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    

     

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
        .far 
 {
  font-size: 40px;
  width:33.33%;
  float: left;
 }
 .fas
 {
  font-size: 40px;
   width:33.33%;
  float: right;
  
 }
 .order
 {
 	display:none;
 }
 .sup
 {
 	position: relative;
 	left:10px;
 	text-decoration: underline;
 }
 .navbar-header
 {
    color: white;
    position: relative;
    left: 200px;
    top: 10px;
    font-size: 23px;
 }
 .button1
 {
    position: relative;
    left: 1000px;
 }
 		
        


    </style>
     
</script>
<script type="text/javascript">
function GetSelectedItem(el)
{
    var e = document.getElementById(el);
    
}
</script>
     
 
</head>
<body>
    <div class="container" >
        

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="Cart.php">Shop</a></li>
      <li class="active"><a href="Cart1.php">Cart</a></li>
      <li><a href="profile.php">Profile</a></li>
       <li><a href="wallet.php">Wallet</a></li>
    <li><a href="elec.php">Pay your bill</a></li>
       <li><a href="busreg.php">Book bus tickets</a></li>
     <div class="navbar-header">
      <p>Shopping Cart details</p>
    </div>


    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
   
    </ul>
    </div>
  </nav>
 
		


     


        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

         <?php
         session_start();
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>Rs <?php echo $value["product_price"]; ?></td>
                            <td>
                                Rs <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart1.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                        $_SESSION['total']=$total;
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">Rs <?php echo number_format($total, 2); ?></th>
                            <th>
                             <a  href="confirm.php">Confirm order</a></th>

                           
                            
                        </tr>


                        <?php

 if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    //echo '<script>alert("Product has been Removed...!")</script>';
                    //echo '<script>window.location="Cart.php"</script>';

                }
            }
        }
    }
   




                    }

                ?>
            </table>
        </div>
        <form method="POST">
        <button class="button1" name="button2" type="submit">Clear Cart</button>
    </form>

    </div>
    <?php
if (isset($_POST['but'])){
if(isset($_POST['promo']) ) {
     $total=0;
     $_SESSION['promo']=$total;      
} else {
     echo "error";
}
}
if (isset($_POST['button2'])) {

            foreach ($_SESSION["cart"] as $keys => $value){
                
                    unset($_SESSION["cart"][$keys]);
                  
                }
                
    # code...
}



    ?>





</body>
</html>