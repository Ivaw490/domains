<?php

class img{
    private static $name;
    private static $path;
    private static $pathMini;
    private static $size;
    private static $conn;

    private function __construct(){
        self::$conn = bd::getConnection();
        self::$name = $_FILES["img"]["name"];
        self::$path = PUB_DIR ."img/" . $_FILES["img"]["name"];
        self::$pathMini = PUB_DIR ."img/mini/" . $_FILES["img"]["name"];
        self::$size = $_FILES["img"]["size"];
    }

    static function getName(){
        return self::$name;
    }

    static function getPath(){
        return self::$path;
    }

    static function getPathMini(){
        return self::$pathMini;
    }

    static function getSize(){
        return self::$size;
    }



}