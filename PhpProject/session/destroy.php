<?php
session_start();
session_destroy();
?>
<?php
    echo "the session has been destroyed";
    ?>
<a href="third.php">click for second page</a><br/>
<a href="second.php">click here for third page</a>


