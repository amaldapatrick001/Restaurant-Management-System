<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?><?php
require("db.php");
if(isset($_GET['del'])){
    $pid = $_GET['del'];
    
    $sql = "Delete from menus where pid=$pid";
    
    $query = mysqli_query($con,$sql);
    
    if($query){
        echo "<script type='text/javascript'> alert('Your Item Is Removed.')</script>";
        echo '<script>window.location="udfood.php"</script>';
    }
    else{
        echo "<script type='text/javascript'> alert('Your Item cannot be Removed.')</script>";
        echo '<script>window.location="udfood.php"</script>';
        echo mysqli_error($con);
    }
}




 
?>






<style>
    body,html {
  height: 100%;
 }
 h1{
    color: #ffffff;

}



td,th,table{
    
   border: 1px solid; 
    border-color: black;
    background-color:white 
}
</style>

    <!DOCTYPE html>
<html>
<head>
      
    <title>Emerald resturant</title>
    
<link rel="stylesheet" href="main1.css">
   

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
               </header>
    <center><br>
    <h1>
        Update / Delete Food Details</h1>
             
                                <table >
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>PID</th>
											<th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Types</th>
                                            <th>Carogary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
    
                $sql = "select * from menus ";
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="150" height="100" alt='Profile pic' >
                                        <?php
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["pid"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["pname"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["price"];
                                        echo "</td>";
                                    echo "<td>";
                                            echo $row["discription"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["types"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["cid"];
                                        echo "</td>";
                                        echo "<td>";
                                        
                                            ?>
                                            <a href="udfood.php?del=<?php echo $row['pid']; ?>"onclick="return confirm('Are your sure you want to delete this?');">  DELETE </a>
                                      
                                            
                                            <?php
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                        
                }
                else
                {
                    echo "There is no admin yet.";
                }
                mysqli_close($con);
            ?>                     
        </tbody>
            </table>
                            
    



</div>



    
   
</body>
</html>
