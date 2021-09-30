<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    // if (isset($_POST['message'])) {
    //     $position_arobase = strpos($_POST['email'], '@');
    //     if ($position_arobase === false)
    //         echo '<p>Votre email doit comporter un arobase.</p>';
    //     else {
    //         $retour = mail('melanie.parmentier@outlook.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
    //         if ($retour)
    //             echo '<p>Votre message a été envoyé.</p>';
    //         else
    //             echo '<p>Erreur.</p>';
    //     }
    // }



    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
        // (1) Code PHP pour traiter l'envoi de l'email
       
        // Récupération des variables et sécurisation des données
        $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
        $objet = htmlentities($_POST['objet']);
        $mail = htmlentities($_POST['mail']);
        $message = htmlentities($_POST['message']);
       
        // Variables concernant l'email
       
        $destinataire = 'melanie.parmentier@outlook.fr'; // Adresse email du webmaster (à personnaliser)
        $contenu = '<html><head><title> '.$objet.' </title></head><body>';
        $contenu .= '<p>Tu as un nouveau message !</p>';
        $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
        $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
        $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
        $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
       
        // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
        $headers = 'MIME-Version: 1.0'."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
       
        // Envoyer l'email
        mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
        header("location:".__DIR__."/index.php"); // Afficher un message pour indiquer que le message a été envoyé
        // (2) Fin du code pour traiter l'envoi de l'email
      }
    ?>
</body>

</html>