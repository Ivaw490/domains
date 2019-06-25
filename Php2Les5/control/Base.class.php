<?php
include __DIR__ . "/../model/PathConstants.php";

class Base
{
    protected $title;
    protected $content;

    function Start($action){
        $this->$action();
        $this->render();
    }

    protected function Template($view, $vars = array()){
        foreach($vars as $item){
            $$vars = $item;
        }
        ob_start();
        include VIEW . "$view";
        return ob_get_clean();
    }

    protected function render(){
        $vars = array('title' => $this->title, 'content' => $this->content);
        $this->Template(VIEW."PathConstants.php", $vars);
    }
}