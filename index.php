<?php
    require __DIR__ . '/vendor/autoload.php';

    $resend = Resend::client('re_aENNUXZm_NfLkdeQVRWZ65Q4d3eVGUfhf');

    $resend->emails->send([
    'from' => 'Acme <onboarding@resend.dev>',
    'to' => ['postmaster@roisderien.fr'],
    'subject' => 'hello world',
    'html' => '<strong>it works!</strong>',
    ]);

?>