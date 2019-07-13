<?php
include __DIR__ . "/../../model/PathConstants.php";
include MODEL . "calc.php";

class task extends Base{
    private $result = 0;
    private $page;

    function setResult(){
        $this->result = calc();
    }

    function getResult(){
        return $this->result;
    }

    function setPage(){
        $this->page = "task" . $_GET["n"];
    }

    function getPage(){
        return $this->page;
    }

    function build(){
        $this->setPage();
        $this->setResult();
        $this->title = $this->getPage();
        $this->content = $this->Template($this->getPage(), array("result" => $this->getResult()));
    }
}