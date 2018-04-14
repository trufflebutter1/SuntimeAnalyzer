<!DOCTYPE html>
<html>
<head>
	<title>Confirm items</title>
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

    <style type="text/css">
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
 .para{
       
       font-family: sans-serif;
        font-size: 2.0em;
        
    }
       .buttons {
    background-color: deepskyblue;
    border: none;
    color: white;
    padding: 08px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
.discount
{
    text-align:right;
    font-size: 20px;
    margin-right: 70px;

}

 		
    </style>
</head>
<body>
	 <div class="well">
    <h3 class="para">
        Do you want to confirm the order and proceed to payment? 
        </h3>
    </div>
               <center>
    <a href="purchase.php" class="buttons" role="button">PAY</a>
                       <a href="Cart1.php" class="buttons" role="button">NO</a>

    </center>























</form>
<div class="container">
 <div style="clear: both"></div>
         
<br>
     


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
         ob_start();
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>Rs. <?php echo $value["product_price"]; ?></td>
                            <td>
                                Rs.<?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="confirm.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                        $_SESSION['total']=$total;
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>

                            <th align="right">Rs. <?php $total=$_SESSION['total'];echo number_format($total, 2); ?>
                                
                            </th>
                            <th> </div>
    <form method="POST" action="confirm.php">
                       Promo codes:<br>
                       <input type="radio" name="HROJSF">HROJSF<br>
                       <input type="radio" name="asozul">ASOZUL <br>
                       <input type="radio" name="erenof">ERENOF<br> 
                       <button type="submit" name="noi">Apply</button></form> </th>
                            
                            
                        </tr>
                      
  <?php
if (isset($_POST['noi'])) {
    # code...
    $total=$_SESSION['total'];

if(isset($_POST['HROJSF']) ) {
    $total1=$total-($total*0.2);
     $_SESSION['total']=$total1;


      
} 
}

if (isset($_POST['noi'])) {
    # code...

if(isset($_POST['asozul']) ) {
    $total1=$total-($total*0.12);
     $_SESSION['total']=$total1;

      
} 
}


if (isset($_POST['noi'])) {
    # code...

if(isset($_POST['erenof']) ) {
    $total1=$total-($total*0.15);
     $_SESSION['total']=$total1;

      
} 
}







    ?>


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
                    if (isset($_POST['yes'])) {
                    	header("location:purchase.php");
                    	# code...
                    }

                    ?>
 </table>
        </div>
    </div>
     <?php
     if (isset($_POST['noi'])) {
        if (isset($_POST['HROJSF']) || isset($_POST['asozul']) || isset($_POST['erenof'])) {
            
        
         
     
echo '<div class="discount">';
 echo "Total after discount is"." "."Rs. ".$_SESSION['total'];
 echo '<div>';
}
}

    ?>

    



</body>
</html>