<?php // базовый класс
include_once __DIR__ . "/../../model/PathConstants.php";
include_once MODEL . "BD.php";

abstract class Base
{
    protected $title;
    protected $content;
    protected $bdConn;

    function doit($action){
        $this->$action();
        $this->render();
    }

    protected function Template($view, $vars = array()){
        if($vars){
            foreach($vars as $k => $v){
                $$k = $v;
            }
        }
        ob_start();
        include VIEW . "$view.php";
        return ob_get_clean();
    }

    protected function render(){
        $vars = array('title' => $this->title, 'content' => $this->content);
        $page = $this->Template("main", $vars);
        echo $page;
    }
}