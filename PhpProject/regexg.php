<?php
    
    $regex="/[a-zA-z]+\d+/";
    if(preg_match($regex,"june24"))
    {
        echo "found a match!<br>";    
    }
    else
    {
        echo "the regex does'nt match";
    }