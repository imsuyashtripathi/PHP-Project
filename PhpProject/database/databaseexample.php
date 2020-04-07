<?php

    $con=new mysqli("localhost", "root", "", "test");
    if($con->connect_error)
    {
        die("connection failed".$con->connect_error);
    }
    $sql="select * from student";
    $result=$con->query($sql);
    echo "<table border=1px><tr><th>id</th><th>name</th><th>address</th><th>DOB</th></tr>";
    if($result->num_rows >0)
    {
        while ($row = $result->fetch_assoc())
        {
           echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["DOB"]."</td></tr></br>"; 
        }
      
    }
 else {
     echo "0 results";   
}
    $con->close();
   ?>