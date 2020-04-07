<?php
    function fact($num){
        if($num<=1)
             {
                 return 1;
             }
        else
            {
                 return($num*fact($num-1));
                 
             }
    }
    
    $n=fact(5);
    echo "the factorial is: $n";