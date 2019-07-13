<?php
include __DIR__ . "/../../model/PathConstants.php";
include MODEL . "calc.php";

class task extends Base{
    private $result = 0;
    private $page;

    private function setResult(){
        $this->result = calc();
    }

    private function getResult(){
        return $this->result;
    }

    private function setPage(){
        $this->page = "task" . $_GET["n"];
    }

    private function getPage(){
        return $this->page;
    }

    protected function build(){
        $this->setPage();
        $this->setResult();
        $this->title = $this->getPage();
        $this->content = $this->Template($this->getPage(), array("result" => $this->getResult()));
    }
}