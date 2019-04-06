<?php

require '../vendor/autoload.php';
require 'class.phpmailer.php';

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

function sendEmail($to, $subject, $message) {
    ini_set("SMTP", "plus.smtp.mail.yahoo.com ");

    $header = "From:tutz0397@yahoo.com \r\n";
    $sendResult = mail($to, $subject, $message, $header);

    if ($sendResult) {
        echo "<script> alert(\"Message Sent Successfully!\") </script>";
    } else {
        echo "<script> alert(\"Message Failed!\") </script>";
    }
}

$link = "Greetings";
$threadName = "Potato";
$postCount = "10";
$threadId = "1";
$createdOn = "today";

$message =
        "<!-- Bootstrap -->
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>";
$message .=     $htmlString = "<div class=\"card text-center\">"
            . " <h4 class=\"card-header\"><a href=".$link.">".$threadName."</a></h3>"
            . " <div class=\"card-body\"> "
            . "   Post Count: " . $postCount
            . "<br> Posted By: Mark "
            . "<br> Thread Id: " . $threadId
            . " </div>"
            . " <div class=\"card-footer text-muted\">"
            . "Created on: " . $createdOn
            . " </div>"
            . "</div>";
sendEmail("tutz0397@yahoo.com", "Greetings", $message);