<?php

class login extends Base{
    private $login;
    private $pass;
    private $msg;
    private $user_id;


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

    function setCookie($val){
        setcookie("user_id", $val, time() + 6000);
    }

    function delCookie($val){
        setcookie("user_id", $val, time() - 6000);
    }

    function getUserId(){
        return $this->user_id;
    }

    function setUserId($id){
        $this->user_id = $id["id"];
    }

    function isPost(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            return true;
        }else{
            return false;
        }
    }

    function verifyingLogPass(){
        $this->delCookie($this->getUserId());
        if($this->isPost()){
            $this->setLogPass();
            $conn = bd::getConnection();
            $sql = "SELECT id FROM gallery.user where login = '{$this->getLogin()}' and password = '{$this->getPass()}'";
            $sql = $conn->prepare($sql);
            $sql->execute();
            $data = $sql->fetch();
            if($data){
                $this->setUserId($data);
                $this->setCookie($this->getUserId());
                header("location:index.php?a=build&p=menu");

            }else{
                $this->setMsg("Некорректный ввод :(");
                $this->build();
            }
        }
    }

    function build(){
        $this->delCookie(1);
        $this->title = "login";
        $this->content = $this->Template("login", array('msg' => $this->getMsg()));
    }
}