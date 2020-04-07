<html>
    <head>
        
    </head>
    <body bgcolor="lightblue">
<?php
  $a=$_POST['txt1'];
  $b=$_POST['txt2'];
  $c=$_POST['txt3'];
  echo "<h1>the value of a=".$a."</h1>";
  echo "<h1>the value of b=".$b."</h1>";
  echo "<h1>the value of c=".$c."</h1>";
  $avg=($a+$b+$c)/3;
  echo "<h1>the percentage is:</h1>".$avg."%";
  if($avg>=60&&$avg=60)
  {
	  echo "<h1>A grade </h1>";
  }
  else if($avg<60&&$avg>=45)
  {
	  echo "<h1> B grade</h1>";
  }
  else if($avg<45&&$avg>=34)
  {
	  echo "<h1> C grade</h1>";
  }
  else 
  {
	  echo "<h1> fail</h1>";
  }
  
  ?></body>
</html>