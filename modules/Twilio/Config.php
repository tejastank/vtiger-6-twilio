<?php

class Twilio_Config {
    private static $data = array(

        "sid" => "AC2xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx", // Your Account SID from www.twilio.com/user/account
        "token" => "88xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx", // Your Auth Token from www.twilio.com/user/account
        "number" => "+1 XXXXXXXXXXX" //from twilio number goes here
    );
    
    public static function get($key,$value=null){
        if(isset(self::$data[$key]))
            return self::$data[$key];
        return $value;
    }
    
    public static function set($key,$value){
        if(array_key_exists($key, self::$data))
                self::$data[$key]=$value;
    }
}

?>
