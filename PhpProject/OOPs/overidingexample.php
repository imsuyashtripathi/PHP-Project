<?php

class Person{
    public function showData(){
        echo "this is person's show data()<br/>";
    }
}
class Customer extends Person{
    public function showData(){
        
        parent::showData();
        echo "this is customer's show data()";
    } 
}
$data=new Customer();
$data->showData();