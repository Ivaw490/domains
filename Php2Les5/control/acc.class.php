<?php

class acc extends Base{
    private $name;
    private $login;

    private function setName($name){
        $this->name = $name;
    }

    private function getName(){
        return $this->name;
    }

    private function setLogin($login){
        $this->login = $login;
    }

    private function getLogin(){
        return $this->login;
    }

    function setData(){
        $conn = bd::getConnection();
        $sql = "SELECT * FROM gallery.user where id = '{$_COOKIE['user_id']}'";
        $data = $conn->prepare($sql);
        $data->execute();
        $data = $data->fetch();
        $this->setName($data["name"]);
        $this->setLogin($data["login"]);
    }

    function build(){
        $this->setData();
        $this->title = "account";
        $this->content = $this->Template("acc", array("name" => $this->getName(), "login" => $this->getLogin()));
    }
}