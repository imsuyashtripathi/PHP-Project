<?php
   $num=$_POST["txt"];
   $fact=1;
   $i=1;
   echo "the fact is:";
   for($i=1;$i<=$num;$i++)
   {
       echo "$i";
      $fact=$fact*$i;
      
   }
   echo "=".$fact;
?>
