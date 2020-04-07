<?php

  $num=$_POST["txt"];
  $i=1;
  echo "the multiplication of $num is:<br/>";
  while($i<=10){                      //do{
      echo "$num*$i=".$num*$i."</br>";//{     echo "$num*$i=".$num*$i."</br>";
      $i++;                           //     $i++;
                                     //    }while($i<=10);
  }

