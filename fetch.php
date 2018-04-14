


<?php
//fetch.php
//$connect = mysqli_connect("localhost", "root", "", "testing");
include 'config.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($db, $_POST["query"]);
// $query = "
 // SELECT * FROM product
 // WHERE pname LIKE '%".$search."%'

 
 //";
 $query = "
  SELECT * FROM product
  WHERE pname LIKE '%".$search."%'
  OR price LIKE '".$search."%' 
 
 ";

}
else
{
 $query = "
  SELECT * FROM product ORDER BY id
 ";
}
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  
 ';
 while($row = mysqli_fetch_array($result))
 {
  if ($row['id']<=12) {
    # code...
  
  $output .= '

    <div class="col-md-3 ">


 <form method="POST" action="Cart.php?action=add&id=' .$row["id"].'">



                            <div class="filterDiv mobile product">
                            <div id="myDiv">
                               
                        <img src=" '.$row["image"].' " class="img-responsive">
                        <h5 class="text-info"> '.$row["pname"].'</h5>
                        <h5 class="text-danger">Rs. '.$row["price"].' </h5>
                        <input type="number" min="1" name="quantity" class="form-control" value="1">
                        <input type="hidden" name="hidden_name" value=" '.$row["pname"].'">
                                <input type="hidden" name="hidden_price" value="'. $row["price"].'">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                                       <input type="submit" name="update" style="margin-top: 5px;" class="btn btn-success"
                                       value="Update cart">
                                        <input type="submit" name="details" style="margin-top: 5px;" class="btn btn-success"
                                       value="Click for more details">
                                
                               
                                   </form>
                                       

                            </div>
                        </form>
                     
                    </div>
                    </div>
                    










  ';
}
else
{
  $output .= '

    <div class="col-md-3 ">


 <form method="POST" action="Cart.php?action=add&id=' .$row["id"].'">



                            <div class="filterDiv1 acc product">
                            <div id="myDiv1">
                               
                        <img src=" '.$row["image"].' " class="img-responsive">
                        <h5 class="text-info"> '.$row["pname"].'</h5>
                        <h5 class="text-danger">Rs. '.$row["price"].' </h5>
                        <input type="number"  min="1" name="quantity" class="form-control" value="1">
                        <input type="hidden" name="hidden_name" value=" '.$row["pname"].'">
                                <input type="hidden" name="hidden_price" value="'. $row["price"].'">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                                       <input type="submit" name="update" style="margin-top: 5px;" class="btn btn-success"
                                       value="Update cart">
                                        <input type="submit" name="details" style="margin-top: 5px;" class="btn btn-success"
                                       value="Click for more details">
                                
                               
                                   </form>
                                       

                            </div>
                        </form>
                     
                    </div>
                    </div>
                    










  '; 
}
 }
 echo $output;
}
else
{
 echo 'Product Not Found';
}

?>