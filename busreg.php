<?php
ob_start();
session_start();
include 'config.php';

?>


<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
     <link rel="stylesheet" type="text/css" href="register.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="buslogin.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">  
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <title>LOGIN</title>
  <style type="text/css">
    .btn-login
    {
      background-color: #00cc44;
            width: 27px;
            padding-left:30px;
            text-align:center;
            position: relative;
            left: 70px; 
    }
  </style>

  <script type="text/javascript">
   $(document).ready(function () {
    jQuery(function() {   
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    
    $('#dt1').datepicker({
      minDate: new Date(currentYear, currentMonth, currentDate),
      maxDate: new Date(currentYear, currentMonth+1, currentDate+30)
    });
  });

    });
</script>
</head>
<body>
   <div class="container-fluid" >
        

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="Cart.php">Shop</a></li>
      <li><a href="Cart1.php">Cart</a></li>
      <li><a href="profile.php">Profile</a></li>
       <li><a href="wallet.php">Wallet</a></li>
        <li><a href="elec.php">Pay your bill</a></li>
       <li class="active"><a href="busreg.php">Book bus tickets</a></li>



    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"> Logout</a></li>
   
    </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col-md-12">
  <h3 class="he"><b><p align="center" > Book Your Tickets! </b></h3><br><br></p>
      <form method="POST" action=" " class=".form">
        <p align="center">
          
  <input type="text" pattern="^[a-zA-z]{3,10}$" class="Username" name="username" required="" placeholder="Enter your Name" style="width: 300px;" /><br><br><br>
  
  <input type="number" min="18" max="80" class="Password" name="password" required="" placeholder="Enter your age" style="width: 300px;" /><br><br><br>
    Provider:
  <select name='provider' id='providerid'>
   <option value='none'>None</option>     
  <option value='SRS'>SRS Travels</option>
  <option value='AT'>Ali Travels</option>
  <option value='OT'>Orange Travels</option>
  <option value='MSRTC'>MSRTC</option>


  </select>
  <br><br><br>
 Source:
<select name='source' id='sourceid'>
<option value='Bangalore'>Bangalore</option>
<option value='Chennai'>Chennai</option>
<option value='Hyderabad'>Hyderabad</option>
<option value='Mumbai'>Mumbai</option>
<option value='Delhi'>Delhi</option>
<option value='Kolkata'>Kolkata</option>

</select>
Destination:
<select name='destination' id='destinationid'>
<option value='Bangalore'>Bangalore</option>
<option value='Chennai'>Chennai</option>
<option value='Hyderabad'>Hyderabad</option>
<option value='Mumbai'>Mumbai</option>
<option value='Delhi'>Delhi</option>
<option value='Kolkata'>Kolkata</option>

</select>
<br><br><br>


Date of travel:
<input type="text" id="dt1">

<br><br><br>
Number of seats:
<input type="number" min="1" max="7" required="" name="seats">
<br><br>
<br><br>
<?php
$sqlw="SELECT * FROM travels";
$result=mysqli_query($db,$sqlw);
echo "Number of seats remaining in each Travels company:";
echo '<br>';
if (mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['name'].":". $row['seats'];
                        echo '<br>';
                      }
}



?>








    
  
    <div class="col-md-2"><p align="center"> <font color="white"><button disabled="" id="sup"  name="book" size="20px;" type="submit" class="btn btn-login" >Confirm booking</p></button></font></div><br><br><br>
    <form>
      <script>


    var d = new Date();
    var n = d.getHours();
    var min=d.getMinutes();
    var diff=13-n;
   if (diff==1&& min>0) {
    alert('Sorry!Booking not available at the moment'); 
     window.history.back();

        
   }
   if(diff<1)
   {
   alert('Sorry!Booking not available');
    window.history.back();
   // document.getElementById(c).display='none';
   }
   if(diff>1)
   {
    
   // document.getElementById(c).display='block';
 alert('booking available');
 document.getElementById("sup").disabled = false;

   
    
}
</script>
 

    </form>

 

    </div>
    
  </form>
 
  <?php
  
  if (isset($_POST['book'])) {
    $s=$_POST['source'];
    $_SESSION['source']=$s;
    $d=$_POST['destination'];
    $_SESSION['dest']=$d;
    $n=$_POST['provider'];
    $_SESSION['provider']=$n;
    $name1=$_POST['username'];
    $_SESSION['name1']=$name1;
    $age=$_POST['password'];
    $_SESSION['age']=$age;
  $sql="SELECT *from travels where name='$n'";
  $result=mysqli_query($db,$sql);
  $row=mysqli_fetch_ASSOC($result);
   $number=$row["seats"];
    if ($s==$d) {
      echo "<script type='text/javascript'>alert('Source and destination cannot be same');</script>";
      # code...
    }
    else{
        $seats=$_POST['seats'];
        $_SESSION['seats']=$seats;
        $total=900*$seats;
        $_SESSION['amount']=$total;
        $travels=$_POST['provider'];

        if ($travels=='SRS') 
          {    

              $sql4="SELECT *FROM travels where name='SRS' ";
              $result=mysqli_query($db,$sql4);
              $row=mysqli_fetch_ASSOC($result);
              $seats_rem=$row['seats'];
               $s=$_SESSION['seats'];
              if($s<=$seats_rem){
              $number=$number-$s;
              $_SESSION['updated_value']=$number;
              header('location:bconfirm.php');
          }
          else
          {
             echo "<script type='text/javascript'>alert('Not enough seats available.Choose another travels');</script>";

          }
          


          }

          if ($travels=='AT') 
          {   
              $sql5="SELECT * FROM travels where name='AT' ";
              $result=mysqli_query($db,$sql5);
              $row=mysqli_fetch_ASSOC($result);
              $seats_rem=$row['seats'];

              $s=$_SESSION['seats'];
              if ($s<=$seats_rem) {
                
              

              $number=$number-$s;
              $_SESSION['updated_value']=$number;
              header('location:bconfirm.php');
          }
          else
          {
            echo "<script type='text/javascript'>alert('Not enough seats available.Choose another travels');</script>";
            
          }

            


          }

          if ($travels=='OT') 
          {
               $sql5="SELECT * FROM travels where name='OT' ";
              $result=mysqli_query($db,$sql5);
              $row=mysqli_fetch_ASSOC($result);
              $seats_rem=$row['seats'];

              $s=$_SESSION['seats'];
              if ($s<=$seats_rem) {
                
              

              $number=$number-$s;
              $_SESSION['updated_value']=$number;
              header('location:bconfirm.php');
          }
          else
          {
            echo "<script type='text/javascript'>alert('Not enough seats available.Choose another travels');</script>";
              
          }

          }
          if ($travels=='MSRTC') 
          {
               $sql5="SELECT * FROM travels where name='MSRTC' ";
              $result=mysqli_query($db,$sql5);
              $row=mysqli_fetch_ASSOC($result);
              $seats_rem=$row['seats'];

              $s=$_SESSION['seats'];
              if ($s<=$seats_rem) {
                
              

              $number=$number-$s;
              $_SESSION['updated_value']=$number;
              header('location:bconfirm.php');
          }
          else
          {
            echo "<script type='text/javascript'>alert('Not enough seats available.Choose another travels');</script>";
         
          }

          }
          if ($travels=='none') 
          {
            echo "<script type='text/javascript'>alert('Please choose the travels');</script>"; 
           

          }
        
        
        
        
        
       











    

  }
}


  ?>

</body>
</html>