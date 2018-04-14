<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	  <meta charset="UTF-8">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
    
     
     
 
	<style type="text/css">
		.img-responsive
		{
			height: 100%;
			width: 100%;


			
		}
		.parent
		{
			
			width:50%;
			float: left;
			position: relative;
			top: 40px;



		}
		.child1
		{
			text-align: justify;
			
			
			padding: 20px 20px;
			background-color: #bf80ff;
			
			margin-left: 20px;


		}
		.child
		{
			background-color:#bf80ff;
			width: 100%;
			height: 100%;
			margin-right: 20px;
			

		}
		body
		{
			background-color: #e5ccff;
		}
		.container
		{
			width: 960px;
		}
	</style>
</head>
<body>
	
	<?php
 $id=$_SESSION['nam'];
$sql="SELECT *FROM product where id='$id' ";
$result=mysqli_query($db,$sql);
if (mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_assoc($result);
}
                         


   ?>                     
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="profile.php">Profile</a></li>
      <li><a href="wallet.php">Wallet</a></li>
       <li><a href="Cart.php">Shop</a></li>
        <li><a href="Cart1.php">Cart</a></li>
         <li><a href="elec.php">Pay your bill</a></li>
       <li><a href="busreg.php">Book bus tickets</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
   
    </ul>
  </div>
</nav>
   <div class="container">
                          <div class="parent">
                          	<div class="child">
                          		 <img src="<?php echo $row['image']; ?>" class="img-responsive">
                          	</div>
                          </div>

                           <div class="parent">
                           	<div class="child1">
                           		<form method="post" action="details.php?action=add&id=<?php echo $row["id"]; ?>">
                           <h2 class="text-info"><?php echo $row["pname"]; ?></h2>
                           
                           <?php echo $row['descr']  ?><br>

                                <h4 class="text-danger"><?php echo"Price : Rs. ". $row["price"]; ?></h4>
                                <h4>Enter Quantity:</h4>
                                <input type="text" size="4" name="quantity" class="form-control" value="0">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                                       <input type="submit" name="update" style="margin-top: 5px;" class="btn btn-success"
                                       value="Update cart">
                                   </form>
                                       
                          
                          
                                      
                       </div>
                   </div>
               </div>


               <?php
 if (isset($_POST["add"])){

        
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
               
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="details.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="details.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],

            );
            $_SESSION["cart"][0] = $item_array;
        }
    }



    if (isset($_POST['update'])) {
      /*$pd=$_GET["id"];
                $item1=$_POST["hidden_name"];
                $pc=$_POST["hidden_price"];
                $item=$_POST["quantity"];
               $_SESSION['pro']=$pd;
               $p=$_SESSION['pro'];
              // echo $item;
                 
    /* $sql10="UPDATE cart set quantity='$item' where id='$p' ";
                if(mysqli_query($db,$sql10))
                {
                  echo "good";

                  }
                  else
                  {
                    error_log("hvuhfh");
                  }
                  */

           
        if (!isset($_SESSION["cart"])){

            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                 $pd=$_GET["id"];
                $item1=$_POST["hidden_name"];
                $pc=$_POST["hidden_price"];
                $item=$_POST["quantity"];
               $_SESSION['pro']=$pd;
               $p=$_SESSION['pro'];
                 
                 
               

                 
               
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }




               ?>

                         

                        


</body>
</html>
