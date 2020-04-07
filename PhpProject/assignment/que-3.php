<?php
    $a=$_GET["value1"];
    $b=$_GET["value2"];

    $ch=$_GET["value3"];
    switch ($ch) {
        case '+':
            echo "the sum of $a+$b=".($a+$b);
            break;
        case '-':
            echo "the sub of $a-$b=".($a-$b);
            break;
        case '*':
            echo "the mul of $a*$b=".($a*$b);
            break;
        case '/':
            echo "the div of $a/$b=".($a/$b);
            break;
    }
    ?>