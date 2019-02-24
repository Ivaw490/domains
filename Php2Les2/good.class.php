<?php
require_once "goodSetGetter.php";

abstract class good{
    use goodSetGetter;

    protected function __construct($name, $type, $price, $description, $amount)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setAmount($amount);
    }

    abstract function viewGoodInfo();
}