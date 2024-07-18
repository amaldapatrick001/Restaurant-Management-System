
<?php
session_start();

if(!isset($_SESSION['email'])){
header("location: login.php"); 
}
?>


<?php
require("db.php");
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
    <center><br><br><br>
    <h1>
        Reserved Table Details</h1>
                                <table >
                                    <thead>
                                        <tr>
                                           <th>RID</th>
                                            <th>EMAIL</th>
											<th>NAME</th>
                                            <th>CHAIRS</th>
											<th>PHONE NO</th>
                                            <th>RESERVED DATE</th>
                                            <th>BOOKED DATE</th>
											<th>BOOKED TIME</th>
                                            <th>STATUS</th>
                                            <th>VIEW</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
								<?php
                                
require("db.php");
    
                $sql = "select * from reservation";
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                            
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        
                                        ?>
                                        <?php
                                        echo "<td>";
                                        echo $row["rid"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["email"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["fname"]." ";
                                            echo $row["lname"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["no_chair"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["phone1"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["rdate"];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $row["bdate"];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $row["btime"];
                                    echo "</td>";
                                        echo "<td>";
                                        echo $row["r_action"];
                                        echo "</td>";
                                        ?><td>
                                        <a href="v_cartr.php?view=<?php echo $row["email"]. $row["rdate"];?>">Orders</a>
                                        </td>;
                                            
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
                            
    
            </center>
   
</body>
</html>
