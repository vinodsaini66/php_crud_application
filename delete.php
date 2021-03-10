<?php

$id=$_REQUEST['id'];

require_once "config.php";

$sql="Delete from user_data where id=$id";


$result=mysqli_query($conn,$sql);
        
        if($result)
        {
            echo " Data Deleted :";
        }
         else
            {
                echo "Error :  ".mysqli_error($conn);
            }
?>
