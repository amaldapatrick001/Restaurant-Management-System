<?php
require("db.php");
if(isset($_POST['submit'])){
    
    $tname= $_POST['tname'];
    $description= $_POST['description'];
    $price= $_POST['price'];  

    $imagename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
     move_uploaded_file($tempname, "imgs/$imagename");
     
$sql = "INSERT INTO tables ( tname, image, price, description) values('$tname','$imagename','$price','$description')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        echo "<script type='text/javascript'> alert('Your Table is Addea successfuly')</script>";
       echo '<script>window.location="atable.php"</script>';
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
            <h1> Add Table </h1>
            <form  method="POST" action="atable.php" enctype="multipart/form-data">
            <div class="input-box">
                Table Settings
                <input name="tname" type="text" placeholder="Settings" required><br />
                </div>

                <div class="input-box">Price per set
                <input name="price" type="text" placeholder="Price" required><br />
                </div>
                <div class="input-box">Discription
                <input name="description" type="text" placeholder="Discription" required><br />
                </div>
                <div class="">Image
                    <input type="file" name="image" required placeholder="Select image"><br>
             </div><br>
               
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


