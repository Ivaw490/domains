<?php
require_once "goodSetGetter.php";

abstract class good{
    use goodSetGetter;

    protected function __construct($name, $type, $description)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setDescription($description);
    }

    abstract function viewGoodInfo();
    abstract function getFinal_cost();
}