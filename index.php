<html>
<head>
    </head>
<body>
    
    <h1>User Data</h1>
    <h2> <a href="Form_data_example_2.php" target="_blank" >add new user</a></h2>
    
    <?php
      
      require_once "config.php";
     
    $sql="select * from user_data";
    $result=mysqli_query($conn,$sql);
   
    
      
    if(mysqli_num_rows($result)>0)
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>first Name </th>";
        echo "<th>last Name </th>";
        echo "<th>email </th>";
        echo "<th>number </th>";
        echo "<th>place </th>";
        echo "<th>date </th>";
        echo "<th> Action</th>";
        echo "</tr>";
        
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['lname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['cnumber']."</td>";
            echo "<td>".$row['place']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>";
            
            echo "<a href='edit.php?id=".$row['id'];
            echo "' target='_blank'>";
            echo "<input type='button' name='edit' value='edit'>";
            echo "</a>";
            
            echo "<a href='view.php?id=".$row['id'];
            echo "' target='_blank'>";
            echo "<input type='button' name='view' value='view'>";
            echo "</a>";
            
            echo "<a href='delete.php?id=".$row['id'];
            echo "' target='_blank'>";
            echo "<input type='button' name='view' value='delete'>";
            echo "</a>";
            echo "</td>";
        }
        echo "</table>";
        
        
    }else{
        echo "0 result";
    }
      
    
    ?>
    
    
    
    </body>


</html>