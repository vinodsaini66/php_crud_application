
<html>

    <head></head>
    <body>
    <h1> View Data</h1>
        
        <?php
           $id=$_REQUEST['id'];
        
        require_once "config.php";
        
        $sql =" Select * from user_data where id=$id";
        
        $result =mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0)
        {
            
            $row=mysqli_fetch_array($result);
            
            echo "Name : ".$row['fname']." ".$row['lname']."<br><br>";
            echo "Email : ".$row['email']."<br><br>";
            echo "Number : ".$row['cnumber']."<br><br>";
            echo "Place : ".$row['place']."<br><br>";
            echo "Date : ".$row['date']."<br><br>";
            
        }
        else
        {
            echo " 0 result";
        }

        ?>
    
    </body>

</html>
