<?php

class Book
{
    function abc()
    {
        echo "good";
    }
    function __construct()
    {
        echo "bye bye";
    }
}
$b=new Book();
$b->abc();

?>