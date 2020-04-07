<?php

class Person{
    public function __construct() {
        echo "this is Person's constructor<br/>";
    }
    public function __destruct() {
        echo "this is Person's destructor";
    }
    
}

class Customer extends Person{
    public function __construct() {
        echo "this is customer constructor<br/>";
    }
    public function __destruct() {
        echo "this is customer destructor";
    }
}
$data=new Customer();