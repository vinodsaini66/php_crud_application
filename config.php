<?php
$server="localhost";
$username="root";
$pass="8233639160@Aa";
$db="vinod";

$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn)
{
    echo " Not Connected";
}

    
?>