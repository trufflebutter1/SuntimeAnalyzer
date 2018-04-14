<?php
session_start();
ob_start();
include 'config.php';
?>
<?php
//index.php
$minimum_range = 3000;
$maximum_range = 5000;
?>





<!doctype html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SHOP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

 
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: 1px 0px 3px 1px;
            padding: 7px;
            text-align: center;
            background-color: #efefef;
            width:100%;
            float:right;


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

    </style>
    <script type="text/javascript">
    $('#but').click(function() {
 var sup=$( "#promo option:selected" ).text();
 window.alert(sup);
});
</script>


 <script>
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

 

 </head>

 <body>
 
   <div class="container" style="width: 100%">
        

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">SHOP TILL YOU DROP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Cart.php">Shop</a></li>
      <li><a href="Cart1.php">Cart</a></li>
      <li><a href="profile.php">Profile</a></li>
       <li><a href="wallet.php">Wallet</a></li>
        <li><a href="elec.php">Pay your bill</a></li>
       <li><a href="busreg.php">Book bus tickets</a></li>



    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
   
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" name="search_text" id="search_text" placeholder="Search by name or price">
      </div>


   
    </form>
  </div>
 

</nav>


<div id="myBtnContainer">
<h3>Categories:</h3>
 <button  type="submit" class="btn sup2" onclick="filterSelection('mobile')"> Mobile Phones</button>
  <button  type="submit" class="btn sup" onclick="filterSelection('acc')"> Accessories</button><br>
</div>
<br>
 <div id="result"></div>
</div>




</div>

			
<script type="text/javascript">
	$(document).ready(function(){
    $(".sup").click(function(){
        $(".filterDiv").hide();
        $(".filterDiv1").show();
    });
        
    $(".sup2").click(function(){
        $(".filterDiv1").hide();
    });
         
     
   


   
});
</script>
 









 <?php
    
   //$database_name = "Product_details";
    //$con = mysqli_connect("localhost","root","",$database_name);


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
               // echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
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




     if (isset($_POST["details"])){
        
        if (isset($_SESSION["cart1"])){
            $item_array_id1 = array_column($_SESSION["cart1"],"product_id1");
            if (!in_array($_GET["id"],$item_array_id1)){
                $count1 = count($_SESSION["cart1"]);
                $item_array = array(
                    'product_id1' => $_GET["id"],
                    'item_name1' => $_POST["hidden_name"],
                    'product_price1' => $_POST["hidden_price"],
                    'item_quantity1' => $_POST["quantity"],
                );
                $i=$_GET["id"];
                $_SESSION["nam"]=$i;
                $nam=$_SESSION["nam"];
                   
                $_SESSION["cart1"][$count1] = $item_array;
                header("location:details.php");
               // echo '<script>window.location="details.php"</script>';
            }else{
                 $count1 = count($_SESSION["cart1"]);
                $item_array = array(
                    'product_id1' => $_GET["id"],
                    'item_name1' => $_POST["hidden_name"],
                    'product_price1' => $_POST["hidden_price"],
                    'item_quantity1' => $_POST["quantity"],
                );

                 $i=$_GET["id"];
                $_SESSION["nam"]=$i;
                $nam=$_SESSION["nam"];
                  
                $_SESSION["cart1"][$count1] = $item_array;
                header("location:details.php");
                //echo '<script>window.location="details.php"</script>';
                
            }
        }else{
            $item_array = array(
                'product_id1' => $_GET["id"],
                'item_name1' => $_POST["hidden_name"],
                'product_price1' => $_POST["hidden_price"],
                'item_quantity1' => $_POST["quantity"],

            );
             $i=$_GET["id"];
                $_SESSION["nam"]=$i;
                $nam=$_SESSION["nam"];
                $_SESSION["cart1"][$count1] = $item_array;
                //echo '<script>window.location="details.php"</script>';
                 header("location:details.php");
            
            
        }
    }






       
  





    ?>


                

                   
      
       
  





   
 </body>
</html>


  <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);

   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });

});
</script>
