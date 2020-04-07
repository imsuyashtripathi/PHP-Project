<?php

session_start();
?>
<?php

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  $usr=$_GET["txt"];
  $_SESSION["First"]=$usr;
  echo "session set succesfully</br>";
  
 }
  ?>
<a href="second.php">click here for second page</a><br/>
<a href="third.php">click here for third page</a><br/>
<a href="destroy.php">click here for destroy the session</a><br/>


    
<?php

    if(!isset($_SESSION['counter']))
    {
        $_SESSION['counter']=1;
    }
    else
    {
        $_SESSION['counter']++;
    }
    echo ("page views:".$_SESSION['counter']);
    ?>