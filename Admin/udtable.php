<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?><?php
require("db.php");
session_start();
if(isset($_GET['del'])){
    $tid = $_GET['del'];
    
    $sql = "Delete from tables where tid=$tid";
    
    $query = mysqli_query($con,$sql);
    
    if($query){
        echo "<script type='text/javascript'> alert('Your Table Is Removed.')</script>";
        echo '<script>window.location="udtable.php"</script>';
    }
    else{
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
               </header><br>
    <center>
    <h1>
        Update / Delete Table Details</h1><br>
   
             
                                <table >
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>TID</th>
											<th>Name</th>
                                            <th>Price</th>
                                            <th>Discription</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
    
                $sql = "select * from tables ";
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
                                        echo $row["tid"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["tname"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["price"];
                                        echo "</td>";
                                    echo "<td>";
                                            echo $row["description"];
                                        echo "</td>";
                                        echo "<td>";
                                        
                                            ?>
                                             <a href="udtable.php?del=<?php echo $row["tid"];?>">Delete</a><br>
                                             <a href="utable.php?update=<?php echo $row["tid"];?>">Update</a>
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
                            
    
    
   
</body>
</html>
