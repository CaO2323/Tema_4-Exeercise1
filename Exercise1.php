<?php 
    //Creating an Employee class
    class Employee {

        //Defining the attributes
        public $name;
        public $wage;

        //Creating a Initialize Method;
        function Initialize($name, $wage){
            $this-> name = $name;
            $this-> wage = $wage;
        }
        //Creating a Print Method;
        function Print (){
            if($this->wage < 6000){
                echo $this-> name . " ". "You do not must to pay any tax. <br>"; 
            } else {
                echo $this-> name .  " " ."You must to pay taxes. <br>";
            }
    
        }
    }


?>