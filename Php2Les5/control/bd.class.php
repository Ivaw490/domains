<?php // синглтон с подлючением к бд

class bd
{
    private static $conn;
    private static $obj;
    private function __construct()
    {
        self::$conn = new PDO("mysql: host = localhost; dbname = gallery", "root", "");
    }

    static function getConnection(){
        if(!self::$conn instanceof PDO){
            self::$obj = new self;
        }
        if(self::$conn->errorCode() == 0000){
            return self::$conn;
        }else{
            echo "Ошибка подключения БД: " . self::$conn->errorInfo();
        }
    }
}