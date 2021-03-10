
 <?php
    if(!isset($_GET['submit']))
    {

        $id=$_REQUEST['id'];
        session_start();
        $_SESSION['id']=$id;
        
        require_once "config.php";
        
        $sql =" Select * from user_data where id=$id";
        
        $result =mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0)
        {
            
            $row=mysqli_fetch_array($result);
            
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $cnumber=$row['cnumber'];
            $place=$row['place'];
            $date=$row['date'];
            
        }
        else
        {
            echo " 0 result";
        }
}

        ?>

<html>

    <head></head>
    <body>
    <h1> Edit Data</h1>
         <br><br>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
        
        FIRST NAME: <input type="text" name="fname" value="<?php echo $fname; ?> "><br><br>
        LAST  NAME: <input type="text" name="lname" value="<?php echo $lname; ?> "><br><br>
        EMAIL  : <input type="email" name="email" value="<?php echo $email; ?> "><br><br>
        CONTACT NUMBER : <input type="text" name="cnumber" value="<?php echo $cnumber; ?> "><br><br>
        PLACE :<input type="text" name="place" value="<?php echo $place; ?> "><br><br>
        DATE :<input type="text" name="date" value="<?php echo $date; ?> "><br><br>
        <input type="submit" name="submit"><br><br><br>
        </form>
        
        <?php
        
        
        if(isset($_GET['submit']))
        {
            session_start();
            
         $id1=$_SESSION['id'];
            
       $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $email=$_GET['email'];
        $cnumber=$_GET['cnumber'];
         $place=$_GET['place'];
        $date=$_GET['date'];
          
        require_once "config.php";
        
        $sql ="UPDATE user_data SET fname='$fname', lname='$lname', email='$email', cnumber='$cnumber', place='$place', date='$date' WHERE id=$id1";
            
            
        
        $result=mysqli_query($conn,$sql);
        
        if($result)
        {
            echo " Data Updated :";
        }
         else
            {
                echo "Error :  ".mysqli_error($conn);
            }
        }

        ?>
    
    </body>

</html>
