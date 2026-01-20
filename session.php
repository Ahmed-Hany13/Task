<?php
class Session
{
    public static array $data = [];

    public static function get($key)
    {
        if (array_key_exists($key,self::$data)) {
           $value = self::$data[$key];
           return $value;
        }
        return  "Key '$key' Not Found";
    }
    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    public static function flash($key)
    {
        if (array_key_exists($key,self::$data)) {
            echo $key . " => " .self::$data[$key];
            unset(self::$data[$key]);
        }else{
            return "Key '$key' not found";
        }
        
    }

    public static function remove($key)
    {
        if (array_key_exists($key,self::$data)) {
            unset(self::$data[$key]);
        }else{
            return "Session not found";
        }
        
    }

    public static function removeAll()
    {
        self::$data = [];
    }

    public static function getAll(){
        return self::$data;
    }

    public static function has($key){
        return array_key_exists($key,self::$data) ? true : false;
    }


}


echo Session::get(key: 2);
Session::set("message","Hello From OOP");
Session::set("number",2);
Session::set("first","Ahmed");
Session::set("last","Elnagdy");
echo "<br>";
echo Session::get(key: "message");
echo "<br>";
echo Session::get(key: "first");
echo "<br>";
echo Session::get(key: "number");
echo "<br>";



echo Session::flash(key: "number");
echo "<br>";
echo Session::get(key: "number"); // Check Session deleted after flash or not



echo "<br>";
// Session::remove(key: "message");
echo Session::get(key: "message");



echo "<br>";
// Session::removeAll();
// var_dump(Session::$data);


echo "<pre>";
print_r(Session::getAll());
echo "</pre>";


var_dump(Session::has("message")); //true
echo "<br>";
var_dump(Session::has("ali")); //false
