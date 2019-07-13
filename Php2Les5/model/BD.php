<?php // работа с бд

// проверка на соответствие введенных пользователем данных авторизации (логин, пароль)
function userVerifying($arr){
    $conn = bd::getConnection();
    $sql = "SELECT id FROM gallery.user where login = :login and password = :password";
    $data = $conn->prepare($sql);
    $data->execute(array(':login' => $arr["login"], ':password' => $arr["password"]));
    $data = $data->fetch();
    return $data;
}

// получение данных авторизованного пользователя по его id
function getAccData(){
    $conn = bd::getConnection();
    $sql = "SELECT * FROM gallery.user where id = '{$_COOKIE['user_id']}'";
    $data = $conn->prepare($sql);
    $data->execute();
    $data = $data->fetch();
    return $data;
}

// запись отзыва в бд
function insertFeedBack(){
    if(($user = $_POST["feedback-user"]) && ($text = $_POST["feedback-text"])) {
        $conn = bd::getConnection();
        $sql = "INSERT INTO gallery.feedback (username, text) VALUES (:user, :text)";
        $data = $conn->prepare($sql);
        $data->execute(array(':user' => $user, ':text' => $text));
    }
    else{
        return "Проверьте ввод. Заполнены не все поля";
    }
}

// получение всех отзывов
function getAllFeedBacks(){
    $conn = bd::getConnection();
    $sql = "SELECT * FROM gallery.feedback ORDER BY id DESC";
    $data = $conn->prepare($sql);
    $data->execute();
    $data = $data->fetchAll();
    if($data){
        return $data;
    }else{
        return $data[0] = [["text" => "There are no feedback yet:("]];
    }
}