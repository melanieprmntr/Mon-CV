<!-- <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body> -->
<?php

include "../contact.php";


$name = filter_input(INPUT_POST, "name");
$firstname = filter_input(INPUT_POST, "firstname");
$phone = filter_input(INPUT_POST, "phone");
$email = filter_input(INPUT_POST, "email");
$objet = filter_input(INPUT_POST, "objet");
$message = filter_input(INPUT_POST, "message");

$to = "melanie.parmentier@outlook.fr";
$from = "contact@melanie-parmentier-developpeur-web.fr";

$subject = " Message de ". $name . $firstname;
$headers = 'From: '. $from ;


if (
    isset($name)
    // && isset($firstname)
    // && isset($phone)
    // && isset($email)
    // && isset($objet)
    // && isset($message)
) {
    echo"je suis dans le if";
    $isSend = mail(
        $to,
        $subject,
        "name",
        "firstname",
        "phone",
        "email",
        "objet",
        "message",
        $headers
    );

} else {
    echo 'erreur envoi mail';
}
