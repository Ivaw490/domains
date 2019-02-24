<?php

trait goodSetGetter
{
    private $name;
    private $type;
    private $price;
    private $description;
    private $amount = 0;

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

    function setAmount($amount)
    {
        $this->amount = $amount;
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

    function getAmount()
    {
        return $this->amount;
    }
}