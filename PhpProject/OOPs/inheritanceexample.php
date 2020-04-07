<?php

class Animal
{
    public $name;
    public function Greet()
    {
        return "Hello".$this->name;
    }
}

class Dog extends Animal
{
    public function GreetDog()
    {
        return "Child".$this->name;
    }
}
$Dog1=new Dog();
echo $Dog1->Greet();
echo $Dog1->GreetDog();