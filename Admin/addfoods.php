<?php
require("db.php");
if(isset($_POST['submit'])){
    
    $pname= $_POST['pname'];
    $price= $_POST['price'];
    $cid= $_POST['cid'];
    $discription= $_POST['discription'];
    $types= $_POST['types'];  
 
$imagename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
 move_uploaded_file($tempname, "imgs/$imagename");
  
$sql = "INSERT INTO menus ( pname, image, price, cid, discription, types) values('$pname','$imagename','$price','$cid','$discription','$types')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        echo "<script type='text/javascript'> alert('Your Food Item  Is Saved')</script>";
       echo '<script>window.location="addfoods.php"</script>';
    }
    else
    {
        die(mysqli_connect_error());
    }
    
    mysqli_close($con);
}
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Emeralds</title>
        
<link rel="stylesheet" href="l,s.css">
    </head>
    <body>
        
    <div class="center">
            <h1> Add Menu</h1>
            <form  method="POST" action="addfoods.php" enctype="multipart/form-data">
            <div class="input-box">
                Name
                <input name="pname" type="text" placeholder="Item Name" required><br />
                </div>

                <div class="input-box">Catogarys
                <select name="cid" required>
                <option value=" ">  </option>
                <option value="1">Starters</option>
                <option value="2">Soups</option>
                <option value="3">Deserts</option>
                <option value="4">Salad</option>
                <option value="5">Rice_&_Biriyani</option>
                <option value="6">Bread</option>
                <option value="7">Non-veg</option>
                <option value="8">Veg</option>
                <option value="9">Tantoori_&_Tawan</option>
                <option value="10">Pizza</option>
                <option value="11">Burger</option>
                <option value="12">Sandwich</option>
                <option value="13">Icecreams</option>
                <option value="14">Shake</option>
                <option value="15">Cool_Drinks</option>
                <option value="16">Hot_Drinks</option>
                <option value="17">Dessert</option>
                <option value="18">Fruit_Salad</option>
                </select>
                </div>
                <div class="input-box">Price
                <input name="price" type="text" placeholder="Price" required><br />
                </div>
                <div class="input-box">Discription
                <input name="discription" type="text" placeholder="Discription" required><br />
                </div>
                <div class="">Image
                    <input type="file" name="image" required placeholder="Select image"><br>
             </div><br>
                <div class="">Type
                <input type="radio" name="types" value="veg"/>veg
                <input type="radio" name="types" value="non-veg"/>non-veg
                </div>

                  <div class="input-box">
                  </div>
                
                <div class="input-box">
                <input type="submit" name="submit" class="form-login submit" value="Add">
</div>
<center>
<div class="log">Back to <a href="apanel.php">Admin Panel</a>  or  <a href="updatedatabase.php">Update Panel</a> </div><br>
               </center>  </form>
        </div>
    </body>
</html>


