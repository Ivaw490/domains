<?php // личный кабинет

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

    // получение и установка данных (пароль, логин)
    function getSetData(){
        $conn = bd::getConnection();
        $sql = "SELECT * FROM gallery.user where id = '{$_COOKIE['user_id']}'";
        $data = $conn->prepare($sql);
        $data->execute();
        $data = $data->fetch();
        $this->setName($data["name"]);
        $this->setLogin($data["login"]);
    }

    // построение страницы
    function build(){
        $this->getSetData();
        $this->title = "account";
        $this->content = $this->Template("acc", array("name" => $this->getName(), "login" => $this->getLogin()));
    }
}