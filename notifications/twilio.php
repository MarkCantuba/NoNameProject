<?php

require '../vendor/autoload.php';

use Twilio\Rest\Client;

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

function validatePhoneNumber($phoneNumber, $name) {

    $accountSid = getenv('TWILIO_SID');
    $authToken = getenv('TWILIO_AUTH');

    $twilio = new Client($accountSid, $authToken);

    $validation_request = $twilio->validationRequests
            ->create($phoneNumber, // phoneNumber
            array(
        "friendlyName" => $name
            )
    );

    echo $validation_request->friendlyName;
}
