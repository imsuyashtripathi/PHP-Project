<?php
  $regex="/[a-zA-Z]+\d*@/";
  if(preg_match($regex,"suyashtripathi98@"))
  {
      echo "email is valid</br>";
  }
  else
  {
      echo "email is not valid";
  }
?>