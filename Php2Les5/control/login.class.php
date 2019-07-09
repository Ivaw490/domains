<?php

class login extends Base{
    private $login;
    private $pass;
    private $msg;
    private $cookie;
    private $user_id;
    private $page = 'login';


    function getLogin(){
        return $this->login;
    }

    function getPass(){
        return $this->pass;
    }

    function setLogPass(){
        $this->login = $_POST["login"];
        $this->pass = $_POST["password"];
    }

    function getMsg(){
        return $this->msg;
    }

    function setMsg($msg){
        $this->msg = $msg;
    }

    function getCookie(){
        return $this->cookie;
    }

    function setCookie(){
        setcookie("user_id",$this->getUserId(), time() + 6000);
        $this->cookie = $_COOKIE["user_id"];
    }

    function delCookie(){
        setcookie("user_id",$this->getUserId(), time() - 6000);
        $this->cookie = $_COOKIE["user_id"];
    }

    function getUserId(){
        return $this->user_id;
    }

    function setUserId($id){
        $this->user_id = $id["id"];
    }

    function getPage(){
        return $this->page;
    }

    function setPage($page){
        $this->page = $page;
    }

    function isPost(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            return true;
        }else{
            return false;
        }
    }

    function verifyingLogPass(){
        $this->delCookie();
        if($this->isPost()){
            $this->setLogPass();
        }
        $conn = bd::getConnection();
        $sql = "SELECT id FROM gallery.user where login = '{$this->getLogin()}' and password = '{$this->getPass()}'";
        $sql = $conn->prepare($sql);
        $sql->execute();
        if($sql->fetch()){
            $this->setUserId($sql->fetch());
            $this->setCookie();
            header("location:index.php?a=build&p=menu");

        }else{
            $this->setMsg("Некорректный ввод :(");
            $this->title = "login";
            $this->build();
        }
    }

    function build(){
        $this->content = $this->Template($this->getPage(), array('msg' => $this->getMsg()));
    }
}