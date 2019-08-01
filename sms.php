<?php

/* 
 * Twillo SMS API Testing
 */

// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC573920437fc1e3ab90177852d2d1dd63';
$token = '4e67a00fc7080d4d7c8512512be6e3ec';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message = $client->messages->create(
    // the number you'd like to send the message to
    '+918003977240',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12055576176',
        // the body of the text message you'd like to send
        'body' => 'Hey Kapil! How are you today?'
    )
);

print($message);