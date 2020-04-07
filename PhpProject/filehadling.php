<?php
        
    $filename="test.txt";
    $handle= fopen($filename, "r");
    $contents= fread($handle, filesize($filename));
    echo $contents;
    fclose($handle);
