<?php
class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The Fruit is {$this->name} and the color is {$this->color}";
    }

}
class StrawBerry extends Fruit{
    public function message(){
        echo "Am I a fruit or a berry?";
    }
}

$strawberry = new StrawBerry("Strawberry", "red");
$strawberry->message();
echo "<br>";
$strawberry->intro();   
