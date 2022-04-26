<?php
namespace app\_utils;

class Req{
    public static function Get($name){
        if (isset($_GET[$name])){
            return htmlspecialchars($_GET['name']);
        }else{
            return null;
        }
    }
    public static function GetAction(){
        return self::Get("action");
    }
}