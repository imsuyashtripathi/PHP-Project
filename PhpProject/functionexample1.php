<?php

   function fun(&$str2)
   {
       $str2="mira road";
   }

   $str1="andheri";
   echo "$str1<br/>";
   
   fun($str1);
  
   echo "$str1";