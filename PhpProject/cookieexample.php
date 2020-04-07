<?php
  setcookie("user","Suyash");
  ?>


<html>
    <body>
        <?php
          if(!isset($_COOKIE["user"]))
          {
              echo "sorry no cookie found";
          }
          else
          {
              echo "</br>Cookie value:".$_COOKIE["user"];
          }
          ?>
    </body>
</html>
