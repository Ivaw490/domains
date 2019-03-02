<?php

trait goodSetGetter
{
    private $name;
    private $type;
    private $price;
    private $description;

    function setName($name)
    {
        $this->name = $name;
    }
    function setType($type)
    {
        $this->type = $type;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function setDescription($description)
    {
        $this->description = $description;
    }
    function getName()
    {
        return $this->name;
    }
    function getType()
    {
        return $this->type;
    }
    function getPrice()
    {
        return $this->price;
    }
    function getDescription()
    {
        return $this->description;
    }
}