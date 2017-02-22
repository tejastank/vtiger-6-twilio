<?php

require_once 'modules/Twilio/Model/Request.php';
require_once 'modules/Twilio/Controller/Sms.php';
require_once 'modules/Twilio/Config.php';
require_once('Smarty_setup.php');

$request=new Twilio_Model_Request($_REQUEST);
$controller=new Twilio_Controller_Sms($request);
$mode=$request->get('mode');

try{
    switch ($mode){
        case "display" : $controller->showForm();
                break;
        case "send" : $controller->sendSms();
                break;
    }
}catch(Exception $ex){
    twilioError($ex->getMessage());
}

function twilioError($error){
    global $app_strings,$currentModule;
    $smarty = new vtigerCRM_Smarty();
    $smarty->assign('GO_BACK',$app_strings['LBL_GO_BACK']);
    $smarty->assign('IMAGE',"themes/images/empty.jpg");
    $smarty->assign("ERROR",$error);
    $smarty->display(vtlib_getModuleTemplate($currentModule,'Error.tpl'));
}

?>
