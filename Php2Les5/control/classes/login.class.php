<?php // страница авторизации


class login extends Base{
    private $login;
    private $pass;
    private $msg; // текст сообщения при неудачной авторизации
    private $user_id; // id авторизованного пользователя

    private function getLogin(){
        return $this->login;
    }

    private function getPass(){
        return $this->pass;
    }

    private function setLogPass(){
        $this->login = $_POST["login"];
        $this->pass = $_POST["password"];
    }

    private function getMsg(){
        return $this->msg;
    }

    private function setMsg($msg){
        $this->msg = $msg;
    }

    private function setCookie($val){
        setcookie("user_id", $val, time() + 6000);
    }

    private function delCookie($val){
        setcookie("user_id", $val, time() - 6000);
    }

    private function getUserId(){
        return $this->user_id;
    }

    private function setUserId($id){
        $this->user_id = $id["id"];
    }

    private function isPost(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            return true;
        }else{
            return false;
        }
    }

    // проверка авторизации с дальнейшей отправкой на страницу Меню либо повторная авториация, в случае неудачи
    protected function verifyingLogPass(){
        $this->delCookie($this->getUserId());
        if($this->isPost()){
            $this->setLogPass();
            $data = userVerifying(array('login' => $this->getLogin(), 'password' => $this->getPass()));
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

    // построение страницы
    protected function build(){
        $this->delCookie(1);
        $this->title = "login";
        $this->content = $this->Template("login", array('msg' => $this->getMsg()));
    }
}