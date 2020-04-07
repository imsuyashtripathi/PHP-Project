<?php
class Books
{
    var $price;
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price=$price;
    }
    public function __construct()
    {
        echo "hello this is construct<br/>";
    }
    public function __destruct() {
        echo "<br/>this is destruct method";
    }
}
$book1=new Books();
$book1->setPrice(500);
echo $book1->getPrice();
