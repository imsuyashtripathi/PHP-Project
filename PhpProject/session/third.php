

<?php
   session_start();
   ?>
<?php

if($_SERVER['REQUEST_METHOD']=='POST')
 {
    echo "user is ".$_SESSION["First"];
 }
 ?>

<br/>
<a href="first.php">click here to home page</a>