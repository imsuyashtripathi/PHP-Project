<?php

    
    class A
    {
        public function __call($method_name,$arguments)
        {
            $methodArray=array('function1','function2');
            
            if(in_array($method_name, $methodArray)==false)
            {
                die("\n Method Does not exit");
            }
            
            if(count($arguments)==2)
            {
                $this->function2($arguments[0],$arguments[1]);
            }
            elseif(count($arguments)==1)
            {
                $this->function1($arguments[0]);
            }
            else
            {
            echo "\nUnknown method";    
            }
        }
        function function1($a)
        {
            echo "\n from function1";
        }
        function function2($a,$b)
        {
            echo "\n from funcation2"; 
        }
    }
$objA=new A;
$objA->function1('a');
$objA->function2('a','b');
$objA->function3('c');
