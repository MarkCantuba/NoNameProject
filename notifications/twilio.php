<?php

require '../vendor/autoload.php';

use Twilio\Rest\Client;

$to = "a";

function sendSms($to, $message) {
    $accountSid = getenv('TWILIO_SID');
    $authToken = getenv('TWILIO_AUTH');
    $twilioNumber = '+13067007621';

    $client = new Client($accountSid, $authToken);

    try {
        $client->messages->create(
                $to, [
            "body" => $message,
            "from" => $twilioNumber
                ]
        );
    } catch (TwilioException $e) {
        echo $e;
    }
}
