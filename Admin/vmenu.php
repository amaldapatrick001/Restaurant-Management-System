<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}

?>




<?php

@include 'db.php';

if(isset($_POST['add'])){

   $name = $_POST['name'];
   $price = $_POST['price'];
   $image = $_POST['image'];
   $quantity =  $_POST['quantity'];
   $email=$_SESSION['email'];


   $select_cart = mysqli_query($con, "SELECT * FROM `carts` WHERE pname = '$name'");

   if(mysqli_num_rows($select_cart) > 0){
      echo "<script>alert('product already added to cart')</script>";
   }else{
      $insert_product = mysqli_query($con, "INSERT INTO `carts`(pname, price, image, quantity, email) VALUES('$name', '$price', '$image', '$quantity','$email')");
      
      echo "<script>alert('product added to cart succesfully')</script>";
   }

}

?>



  
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>





<html>
    <head>
    <link rel="stylesheet" href="main1.css">
	<link rel="stylesheet" href="food.css"><style>
    h1{
        color:black;}</style>

    <title>Emerald resturant</title>
            

            </head>
            <body><header>
                        <img src="logo.jpeg" width="10%" height="20%" >
                        <ul class="nav">
                             <li><a href="aprofil.php" >Aprofil</a></li>
                             <li><a href="apanel.php" >Apanel</a>
                             <li><a href="updatedatabase.php" >UpdateDatabase</a></li>
                             <li style="float:right"><a href="login.html" class="active">Login</a></li>
                             <li style="float:right"><a href="logout.php" class="active">Logout</a></li>
                             
                         </ul>
                        </header><br><br><br><br><br>
	
    

<div class="side">

<button >Starters</button>
<button >Soups</button>
<button>Deserts</button>
<button>Salad</button>
<button>Rice_&_Biriyani</button>
<button>Bread</button>
<button>Non-veg</button>
<button>Veg</button>
<button>Tantoori_&_Tawan</button>
<button>Pizza</button>
<button>Burger</button>
<button>Sandwich</button>
<button>Icecreams</button>
<button>Shake</button>
<button>Cool_Drinks</button>
<button>Hot_Drinks</button>

<button>Dessert</button>
<button>Fruit_Salad</button>


</div>

		




<div class="fooditems">
<h1> <center>MENU</center></h1>
	
<?php
 
require 'db.php';

$sql = "SELECT * FROM menus WHERE cid in (SELECT cid FROM catogary ) ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_array($result)){
    if ($count == 0)
      echo "<div class='row'>";

?> 
<div style="float: left; width: 30%;  padding: 20;  margin: 20; background-color:white;">
    <div class="item"><center>
        <form method="post" action="">
        <div class="foodpic"><br>
            <img src="<?php echo './imgs/' . $row['image'] ?>" width="300" height="200" alt='Food pic' class="img-responsive"><br /><br />
        </div>
        <div class="description">
        <h4 class="text-info"><?php echo $row["pname"]; ?> (<?php echo $row["types"]; ?>)</h4>
        </div> 
        <div class="pricetag">
            <h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
            <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
        </div>
        <input type="hidden" name="name" value="<?php echo $row["pname"]; ?>">
        <input type="hidden" name="price" value="<?php echo $row["price"]; ?>">
        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
    </div>
    </form>
        
        
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php


}

?>

   
</body>
</html>