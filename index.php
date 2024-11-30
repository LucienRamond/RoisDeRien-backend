<?php
    require __DIR__ . '/vendor/autoload.php';

    $resend = Resend::client('re_aENNUXZm_NfLkdeQVRWZ65Q4d3eVGUfhf');

    $resend->emails->send([
    'from' => 'Acme <michel@gmail.com>',
    'to' => ['delivered@resend.dev'],
    'subject' => 'hello world',
    'html' => '<strong>it works!</strong>',
    ]);

?>