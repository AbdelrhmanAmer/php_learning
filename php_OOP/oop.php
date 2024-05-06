<?php
    class Fruit{
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
    }

    $fruit1 = new Fruit();
    $fruit1->set_name("Apple");
    echo $fruit1->get_name();       
?>