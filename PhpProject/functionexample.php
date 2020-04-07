<?php
        
  function add($a,$b)
  {
      echo "the sum of $a+$b=".($a+$b)."</br>";
  }
  function mul($a,$b)
  {
       echo "the mul of $a*$b=".($a*$b)."</br>";
  }
  function sub($a,$b)
  {
       echo "the sub of $a-$b=".($a-$b)."</br>";
  }
  function div($a,$b)
  {
       echo "the div of $a/$b=".($a/$b)."</br>";
  }
  $num1=$_POST["txt1"];
  $num2=$_POST["txt2"];
  add($num1,$num2);
  sub($num1,$num2);
  mul($num1,$num2);
  div($num1,$num2);
  ?>