<?php
include "../contact.php";
include_once __DIR__ . "/../templateUtils/header.php";

$name = filter_input(INPUT_POST, "name");
$firstname = filter_input(INPUT_POST, "firstname");
$phone = filter_input(INPUT_POST, "phone");
$email = filter_input(INPUT_POST, "email");
$objet = filter_input(INPUT_POST, "objet");
$message = filter_input(INPUT_POST, "message");

// $from = "contact@melanie-parmentier-developpeur-web.fr";

// $subject = " Message de ". $name . $firstname;
$headers = 'From:contact@melanie-parmentier-developpeur-web.fr' . "\r\n" .
    'Reply-To: melanie.parmentier@outlook.fr' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// if (
//     isset($name)
//     && isset($firstname)
//     && isset($phone)
//     && isset($email)
//     && isset($objet)
//     && isset($message)
// ) {
mail(
    "melanie.parmentier@outlook.fr",
    // $subject,
    $name,
    "firstname",
    "phone",
    "email",
    "objet",
    "message",
    $headers
);
// }
// else {
//     echo 'erreur envoi mail';
// }
?>


<section id="contact">

    <div class="title-main-left-darkblue ">

        <h2># Contact</h2>
    </div>

    <div class="container yellow">
        <!-- <div> -->
        <!-- <p>Je suis joingnable par <phone><i class="fas fa-phone"> 06 73 57 59 33</i> </phone> , par <a href="mailto:melanie.parmentier@outlook.fr"><i class="far fa-envelope"></i></a> ou via le
            formulaire de contact ci-dessous.
        </p> -->

        <div>

            Votre message a bien été envoyé. Je vous recontacterai dans les plus brefs délais.
        </div>

        <div>
            <li class="colorBtnReturn">

                <a href="../index.php">Retour à la présentation</a>
            </li>
        </div>
    </div>

</section>


<?php

include_once __DIR__ . "/../templateUtils/footer.php";
