<?php
class Twilio_Model_Request{
    private $request;
    
    public function __construct($request) {
        $this->request=$request;
    }
    
    public function get($key,$value=null){
        if(array_key_exists($key, $this->request))
                return vtlib_purify ($this->request[$key]);
        return $value;
    }
}
?>
