<?php
session_start();

if(isset($_GET['submit'])){
    $eid = $_GET['submit'];
    require("db.php");
    
    $query = "DELETE FROM employee WHERE eid='" . $_GET["ei"] . "'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert(' Employee have been Removed')</script>";
    
        echo "<script>window.open('edelete.php','_self')</script>";
    }
    else
    {
        die(mysqli_connect_error());
    }
    
    mysqli_close($con);
    }
?>



<html>
    <body>
    <form action="edelete.php" method="GET" >
    <div class="input-box">
                    <label>Enter employee id to be deleted</label> 
                       <input type="number"  name = "eid" required>
                    </div>
                    <div class="button">
                    <input type="submit"  value="Delete" name="submit">
                </div>
</form>
    </body>
</html>