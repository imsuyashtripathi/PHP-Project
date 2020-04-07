<?php

class Books{
    
    var $price;
    var $title;
    
    function getPrice()
    {
       return $this->price;
    }
    function getTitle()
    {
       return $this->title;
    }
    function setPrice($price)
    {
        $this->price=$price;
    }
    function setTitle($title)
    {
        $this->title=$title;
    }    
}
$book1=new Books();

$book1->setPrice($_GET["txt1"]);
$book1->setTitle($_GET["txt2"]);
$price=$book1->getPrice();
$title=$book1->getTitle();
echo "the price is:$price<br/>";
echo "the title is:$title";
