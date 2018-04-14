<?php
ob_start();
session_start();
include 'config.php';
?>

<html lang="en">
<head>
  <title>WALLET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .first{
             border: 1px solid #ccc;
    border-radius: 4px;
        }
    .data
        {
            color:#003399;
            font-family:sans-serif;
                font-size: 2.0em;

            
            
        }
        .option{
            color:#003399;
            font-family:sans-serif;
                font-size: 1.6em;
        }
        input[type=text] {
    background-color: deepskyblue;
    color: white;
           border: 1px solid #ccc;
    border-radius: 4px;
            padding: 05px 32px;
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
.sup
{
  font-size: 15px;
  color:#80c1ff;
}
        
    </style>
</head>
<body>
  <div class="container-fluid" >
        

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="Cart.php">Shop</a></li>
      <li><a href="Cart1.php">Cart</a></li>
      <li><a href="profile.php">Profile</a></li>
       <li class="active"><a href="wallet.php">Wallet</a></li>
        <li><a href="elec.php">Pay your bill</a></li>
       <li><a href="busreg.php">Book bus tickets</a></li>



    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
   
    </ul>
    </div>
  </nav>
    <div class="container well first">
        <div class="col-lg-1"><a  style="color:skyblue" role="button"><i class="fa fa-credit-card" style="font-size:36px"></i></a></div>
        <div class="col-lg-6 data">Current Wallet Balance is : <?php include 'wallet1.php';   ?><a href="funds.php"> <p>+Add money</a></p></div>
        </div>
        <div class="container well option">
        <form action="wallet.php" method="POST">
          <div><p>Saved source of funds:<?php include 'save.php';  ?></p></div>
  
  <p>Add new Card(Only Mastercard accepted)</p>
            <div class="details">
                
            <div><input type="text" name="cardnumber" required="Card number is required" pattern="^(?:5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$" placeholder="card number" ><p class="sup">Mastercard number should have 16 digits and should start with any number from 51-55</p><br></div>
             <div> <input type="text" name="expiry" required="Expiry date is required" pattern="^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$" placeholder="MM/YY"><br></div>
              <div><input type="text" name="name" required="Name on card is required" placeholder="Name On Card"><br></div>
              <div><input type="text" name="CVV" required="CVV number is required" pattern="^([0-9]{3})$"  placeholder="CVV"><p class="sup">CVV must have only 3 digits</p><br></div>
              <button type="Submit" name="submit">Submit</button>
              

            
            </div>
          </form>
            <form method="POST" action="wallet.php">
            <div><input type="text" name="new" placeholder="Enter new source of fund">
            <button class="login100-form-btn" type="submit" name="verify">
             Submit
            </button>
          </div>
        </form>

           
          </body>



            
            </form>
            
    </div>
           
            </div> 
          
        </div>
      </div>
    </a>
  </div>
</div>

       <?php

       

            $u=$_SESSION['userid'];
            //echo $u;
            if(isset($_POST["verify"]))
            {
              if (isset($_POST['new'])) {
                # code...
              
                $n=$_POST['new']; 
                //echo $n;
                $sql6="INSERT INTO funds values('$u','$n','10000')";
                if(mysqli_query($db,$sql6))
                { 
                  
                  header("location:wallet.php");
                }
                else
                  echo "no";
              
              }
            }
            

            ?>
            <?php

              if (isset($_POST['submit'])) {
                //if(isset($_POST['expiry']) && isset($_POST['cardnumber']) && isset($_POST['name'])){
                $u=$_SESSION['userid'];
                $c=$_POST["cardnumber"];
                $e=$_POST["expiry"];
                $n=$_POST["name"];
                $sql0="INSERT into credit values('$u','Credit Card','1000000','$c','$e','$n')";
                 if(mysqli_query($db,$sql0))
                {
                  header("location:wallet.php");
                }
                else
                  echo "no";
              
              

             $sql5="INSERT into funds values('$u','Credit Card','10000000')";
              if(mysqli_query($db,$sql5))
                {
                  echo "yasss";
                }
                else
                  echo "non";

                # code...
              }
              
           



            ?>
           





</body>
</html>

