<?php

  $file= fopen("test.txt", "w");
  fwrite($file,"hello world");
  echo "successful";
