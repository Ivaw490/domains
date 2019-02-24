<?php
require_once "goodSetGetter.php";

abstract class good{
    use goodSetGetter;

    protected function __construct($name, $type, $price, $description)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setPrice($price);
        $this->setDescription($description);
    }

    abstract function viewGoodInfo();
    abstract function final_cost();
}