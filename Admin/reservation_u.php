



<?php
require("db.php");
session_start();
if(isset($_GET['update'])){
    $update_id = $_POST['update'];
    
    $sql = "UPDATE `reservation` SET `r_action`='$update_value' WHERE rid = '$update_id'";
    $query = mysqli_query($con,$sql);
    
    if($query){
        echo "<script type='text/javascript'> alert('Your Table Is Removed.')</script>";
        //echo '<script>window.location="udtable.php"</script>';
    }
    else{
        echo mysqli_error($con);
    }
}
?>





<!DOCTYPE html>
<html>
<head>
      
    <title>Emerald resturant</title>
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
<link rel="stylesheet" href="main1.css">
</head>
<body>
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
                                    echo "</td>";?>
                                        <td><select name="action" >
  <option >Reserved</option>
  <option >Placed</option>
                                        </td>
                                        <td>
                                        <a href="reservation_u.php?update=<?php echo $fetch_reservation_u['rid'].["action"]; ?>">UPDATE STATUS</a>
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
