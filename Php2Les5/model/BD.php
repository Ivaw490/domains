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
    $sql = "SELECT * FROM gallery.user where id = :id";
    $data = $conn->prepare($sql);
    $data->execute(array(':id' => $_COOKIE['user_id']));
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

// получение массива картинок
function getImages(){
    $conn = bd::getConnection();
    $sql = "SELECT * FROM gallery.images";
    $images = $conn->prepare($sql);
    $images->execute();
    $images = $images->fetchAll();
    return $images;
}

// запись в бд из Cart(корзины)
function insertGalleryOrder(){
    $conn = bd::getConnection();
    foreach ($_SESSION["cart"] as $item_id => $item){
        $sql = "INSERT INTO gallery.orders (good_id, user_id) VALUES (:good_id, :user_id)";
        $sql = $conn->prepare($sql);
        $sql->execute(array(':good_id' => $item_id, ':user_id' => $_COOKIE["user_id"]));
    }
}

// получение картинки по id
function getImgById(){
    $conn = bd::getConnection();
    $sql = "SELECT * FROM gallery.images WHERE id = :id";
    $sql = $conn->prepare($sql);
    $sql->execute(array(':id' => $_GET["id"]));
    $single_img = $sql->fetch(PDO::FETCH_ASSOC);
    return $single_img;
}