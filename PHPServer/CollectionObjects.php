<?php

class CollectionObjects
{
    var $map;
    function __construct()
    {
        $this->map = new \Cassandra\Map();
    }

    function addElem($name, $cech, $typecount, $type, $price){

        $prodact = new Prodacts($name, $cech, $typecount, $type, $price);
        $this->map->set($prodact);


    }
}

