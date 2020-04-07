<?php
        
    $a=array(
           array(1,"Suyash","goregaon"),
           array(1,"Ankur","goregaon"),
           array(1,"rahul","matunga road"),
           array(1,"Sanjay","virar"), 
           );
   ?>
<table border="1px">
    <?php
      foreach($a as $value){
     ?>
    <tr>
       <?php
         foreach($value as $value1){
        ?>
          <td><?php echo "$value1";?></td>
           <?php 
           }?>
          </tr>
          <?php
             echo "<br/>";
      }
      ?>
            
    

