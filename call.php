<?php

/* 
 * Twillo CALL API
 * 
 */
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC573920437fc1e3ab90177852d2d1dd63';
$auth_token = '4e67a00fc7080d4d7c8512512be6e3ec';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+12055576176";

// Where to make a voice call (your cell phone?)
$to_number = "+918003977240";

$client = new Client($account_sid, $auth_token);
$call = $client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);

print($call);

