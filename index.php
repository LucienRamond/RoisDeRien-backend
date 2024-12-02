<?php
    header("Access-Control-Allow-Origin: https://roisderien.fr");
    header('Content-Type: application/json');

    require __DIR__ . '/vendor/autoload.php';

    if($_SERVER['REQUEST_METHOD'] = 'GET' && $_GET['email'] && $_GET["message"])
    {
        $resend = Resend::client('re_aENNUXZm_NfLkdeQVRWZ65Q4d3eVGUfhf');

        $email = $_GET['email'];
        $message = $_GET['message'];

        $resend->emails->send([
        'from' => "$email <contact@roisderien.fr>",
        'to' => ['contact@roisderien.fr'],
        'subject' => 'Nouvelle prise de contact !',
        'html' => $message,
    ]);
        echo json_encode(array('response' => 'ok'));
    }else{
        echo json_encode(array('response' => 'Invalid request'));
    }

?>