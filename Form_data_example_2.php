<!DOCTYPE HTML>
<html>
<head>
    </head>
<body>
    
    <h1> ADD NEW USER</h1>
    <br><br>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        
        FIRST NAME: <input type="text" name="fname"><br><br>
        LAST  NAME: <input type="text" name="lname"><br><br>
        EMAIL  : <input type="email" name="email"><br><br>
        CONTACT NUMBER : <input type="text" name="cnumber"><br><br>
        PLACE :<input type="text" name="place"><br><br>
        DATE :<input type="date" name="date"><br><br>
        <input type="submit" name="submit"><br><br><br>
    </form>
    
    <?php
    
    if(isset($_GET['submit']))
    {
     if($_SERVER['REQUEST_METHOD']=="GET")
     {
         $fname=$_GET['fname'];
         $lname=$_GET["lname"];
         $email=$_GET['email'];
         $cnumber=$_GET['cnumber'];
         $place=$_GET['place'];
         $date=$_GET['date'];
         
         if(empty($fname))
         {exit();}
         elseif(empty($lname))
         {exit();}
         elseif (empty($email))
         {exit();}
         elseif(empty($cnumber))
         {exit();}
         elseif (empty($place))
         {exit();}
         elseif (empty($date))
         {
             exit();
         }
         else{}
         echo "NAME : ".$fname." ".$lname."<br>";
         echo "Email : ".$email."<br>";
         echo "Number : ".$cnumber."<br>";
         echo "Place : ".$place."<br>";
         echo "Date : ".$date;
         
         
         
         
         #Database Connection 
         
    $server="localhost";
    $user="root";
    $pass="8233639160@Aa";
    $db="vinod";
    
    $conn=mysqli_connect($server,$user,$pass,$db);
    if(!conn)
    {
        echo  mysqli_connect_error();
    }
         
        echo "Connection successfully";
    
    # 
    
    $sql =" INSERT INTO user_data (fname,lname,email,cnumber,place,date)VALUES('$fname','$lname','$email','$cnumber','$place','$date')";
    
        # $sql1 =" INSERT INTO test VALUES ('vijay',22)";
         
    if(mysqli_query($conn,$sql))
    {
        echo " New Record Created";
        header('Location: index.php');
    }
    else
    {
        echo "<br>Error : ".$sql."<br>".mysqli_error($conn);
    }
      
         
     }
    
    }
    else
    {
        echo "not pressed";
    }
    
    
    ?>
        
    
    
    </body>
</html>