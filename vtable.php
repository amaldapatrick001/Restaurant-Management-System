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
    $message[] = 'product added to cart succesfully';
      
      echo "<script>alert('product added to cart succesfully')</script>";
   }

}

?>




<html>
    <head>
    <link rel="stylesheet" href="main1.css">
    <style>
        h1{
            color: while;
        }
    </style>
</head>


<body>
	
  <header>
      <img src="logo.jpeg" width="10%" height="20%" >
      <ul class="nav">
           <li><a href="homes.html">Home</a></li>
           <li><a href="about.html" >About</a></li>
           <li><a href="gallery.html" >Gallery</a>
           <li><a href="vmenu.php" >Menu</a></li>
           <li><a href="vtable.php" >Table</a></li>
           <li style="float:right"><a href="login.php" class="active">Login</a></li>
                 <li style="float:right"><a href="logout.php" class="active">Logout</a></li>
           
           <li style="float:right"><a href="cart.php" >My Cart</a></li>
       </ul>
      </header>

<center><h1 style="color: white" >Table</h1></center><br>
<div class="fooditems"> 


  <!-- Display all Food from food table -->
  <?php
  
  require 'db.php';

  $sql = "SELECT * FROM tables  ";
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
          <img src="<?php echo './Admin/imgs/' . $row['image'] ?>" width="300" height="200" alt='Food pic' class="img-responsive"><br /><br />
        </div>
        <div class="description">
          <h4 class="text-info"><?php echo $row["tname"]; ?></h4>
        </div>
        <div class="pricetag">
          <h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
          <h5 class="text-info">no of plate: <input type="number" min="1" max="100" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
        </div>
        <input type="hidden" name="name" value="<?php echo $row["tname"]; ?>">
        <input type="hidden" name="price" value="<?php echo $row["price"]; ?>">
        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
      </form>
    </div>
    
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