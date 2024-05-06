<?php
class Fruit
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$fruit1 = new Fruit("Orange");
echo $fruit1->get_name(); // Orange
