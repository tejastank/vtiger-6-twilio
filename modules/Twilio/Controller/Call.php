<?php

class Twilio_Controller_Call{
    
    private $request;
    
    public function __construct(Twilio_Model_Request $request) {
         $this->request= $request;
    }
    
    public function showForm(){
        global $currentModule;

        $focus=CRMEntity::getInstance("Contacts");
        $focus->id=$this->request->get('return_id');
        $focus->retrieve_entity_info($focus->id,'Contacts');
        $mobile=$focus->column_fields['mobile'];
        $smarty = new vtigerCRM_Smarty();
        $smarty->assign('MODULE',$currentModule);
        $smarty->assign('TO',$mobile);
        $smarty->assign('RETURN_ID',$this->request->get('return_id'));
        $smarty->assign('RETURN_ACTION',$this->request->get('return_action'));
        $smarty->assign('RETURN_MODULE',$this->request->get('return_module'));
        $smarty->display(vtlib_getModuleTemplate($currentModule,'callForm.tpl'));
    }
    
    public function call(){
        global $site_URL;
        $to=$this->request->get("to");
        if(empty($to))
            throw new Exception("To number not provided");
        $body=$this->request->get("body");
        require "modules/Twilio/Services/Twilio.php";
        $sid = Twilio_Config::get('sid',false); // Your Account SID from www.twilio.com/user/account
        $token = Twilio_Config::get('token',false); // Your Auth Token from www.twilio.com/user/account
        $from= Twilio_Config::get('number',false);
        if((!$sid) ||(!$token) || (!$from))
            throw new Exception("Twilio configuration not set");
        $client = new Services_Twilio($sid, $token);

	$call = $client->account->calls->create(
            $from, // From a valid Twilio number
            $to, // Call this number
            // Read TwiML at this URL when a call connects (hold music)
            $site_URL."/modules/Twilio/say.php?message=".base64_encode($body)
	);
        
        
        header("Location: index.php?module=".$this->request->get('return_module')."&action=".$this->request->get('return_action')."&record=".$this->request->get("return_id"));
    }
}
?>
