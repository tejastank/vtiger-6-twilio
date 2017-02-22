<?php

require('Services/Twilio.php');

$response = new Services_Twilio_Twiml();
$response->say(base64_decode($_REQUEST['message']));
print $response;
