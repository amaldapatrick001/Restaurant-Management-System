<?php
session_start();
require 'db.php';
if(!isset($_SESSION['email'])){
header("login.php"); 

}
?>

   <?php

@include 'db.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($con, "UPDATE `carts` SET quantity = '$update_value' WHERE cid = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `carts` WHERE cid = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `carts`");
   header('location:cart.php');
}

?>

<html>
    <head>
    <link rel="stylesheet" href="main1.css"><link rel="stylesheet" href="cart.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
               .button:link, .button:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.dbtn:link, .dbtn:visited {
  background-color: blue;
  color: white;
  
  padding: ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

            </style>
            
    </head>
    <body>
        <header>
            <img class="h"src="logo.jpeg" width="10%" height="20%" >
                        <ul class="nav">
                             <li><a href="homes.html">Home</a></li>
                             <li><a href="about.html" >About</a></li>
                             <li><a href="gallery.html" >Gallery</a>
                            <li><a href="vmenu.php" >Menu</a></li>
                            <li><a href="vtable.php" >Table</a></li>
                             <li style="float:right"><a href="login.php" class="active">Login</a></li>
                 <li style="float:right"><a href="logout.php" class="active">Logout</a></li>
                             <li style="float:right"><a href="cart.php" >My Cart</a></li>
                         </ul></header>

                         




<center>
   <h1>MY CART</h1>

   <table>

      <thead>
         <th>FOOD NAME</th>
         <th>PRICE</th>
         <th>QUANTITY</th>
         <th>TOTAL PRICE</th>
         <th>ACTION</th>
      </thead>

      <tbody>

         <?php 
         
         $email = $_SESSION["email"];
         
         $select_cart = mysqli_query($con, "SELECT * FROM `carts` where email='$email'" );
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>
   


         <tr>
           
            <td><?php echo $fetch_cart['pname']; ?></td>
            <td>Rs. <?php echo ($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['cid']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>Rs.<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['cid']; ?>" onclick="return confirm('remove item from cart?')" class="dbtn">  **REMOVE**  </a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
           
            <td colspan="3">Grand Total</td>
            <td>Rs. <?php echo $grand_total; ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="dbtn"> <i class="fas fa-trash"></i> DELETE ALL_ </a></td>
         </tr>

      </tbody>
   
   
   </table><br><br><br><br><br>
   <a class="button" href="vmenu.php">CONTINUE SHOPPING</a>

   <a class="button" href="delivary.php"<?= ($grand_total > 1)?'':'disabled'; ?>>PAY ON DELIVARY</a>
   <a class="button" href="reservation.php"<?= ($grand_total > 1)?'':'disabled'; ?>>PAY ON VISIT</a>
  
</center>
   

</body>
</html>