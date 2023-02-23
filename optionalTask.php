<?php
// Write a PHP class definition for Product that includes the following:
// Private properties for name, price, and description.
// A public constructor method that accepts values for name, price, and description and sets them as the corresponding properties.
class calculation{
    private $name,$price,$description;
    public function __construct($name,$price,$description){
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
    }
    function Product(){
        echo "The product name is {$this->name} which is about {$this->price} taka and it is  {$this->description} grade product ";
    }
}
$h1= new calculation("biscuits",50,"A");
$h1->Product();
