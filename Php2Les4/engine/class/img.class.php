<?php

class img{
    private static $name;
    private static $path;
    private static $pathMini;
    private static $size;
    private static $conn;

    function __construct(){

        self::setName();
        self::setPath();
        self::setPathMini();
        self::setSize();
    }

    private static function setName(){
        self::$name = $_FILES["img"]["name"];
    }

    private static function setPath(){
        self::$path = PUB_DIR ."img/" . $_FILES["img"]["name"];
    }

    private static function setPathMini(){
        self::$pathMini = PUB_DIR ."img/mini/" . $_FILES["img"]["name"];
    }

    private static function setSize(){
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