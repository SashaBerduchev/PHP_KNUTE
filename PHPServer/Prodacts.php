<?php

class Prodacts
{
    var $name = "";
    var $cech = "";
    var $typecount = "";
    var $type ="";
    var $price = "";
    public function __construct($name, $cech, $typecount, $type, $price)
    {
        $this->name = $name;
        $this->cech = $cech;
        $this->typecount = $typecount;
        $this->type = $type;
        $this->price=$price;
    }


}