<?php

$title = "Mélanie Parmentier contact";
$description = "Comment me contacter? Vous trouverez mes coordonnées, et les infos utiles dans cette section";
$h1 = "Contact";
include_once __DIR__ . "/../templateUtils/header.php";
// include_once __DIR__."/mail.php";
?>

<section id="contact">
    <div class="title-main-left-darkblue ">
        <h2># Contact</h2>
    </div>
    <div class="container yellow">
        <h3>Vous avez un projet de site internet?</h3>
        <h3>Vous avez des questions sur le métier de développeur web?</h3>
        <h3>Vous avez un projet de reconversion en développement web?</h3>
        <h3>Mon profil de développeuse web junior vous intéresse</h3>

        <p> N'hésitez pas à me contacter, je répondrais à vos questions dans les plus brefs délais!
        </p>
        <div>
            <a href="mailto:contact@melanie-parmentier-developpeur-web.fr"><img src="/../img/mail.png" alt="mail">
            <p>A vos mails ;)</p>
            </a>
        </div>
        <!-- <form method="post" class="form" action="mail.php">
            <div>
                    <label for="sexe">Civilité:</label>
                    <div>
                        <label for="masculin">Monsieur</label>
                        <input type="radio" name="sexe" id="masculin">
                        <label for="feminin">Madame</label>
                        <input type="radio" name="sexe" id="feminin">
                    </div>
                </div> 
            <div>
                <label for="name">Nom: </label><br>
                <input type="text" name="name" id="name" required value=<?= filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>>
            </div>
            <div>
                <label for="firstname">Prénom: </label><br>
                <input type="text" name="firstname" id="firstname" required value=<?= filter_var($firstname, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>>
            </div>
            <div>
                <label for="phone">Téléphone: </label><br>
                <input type="tel" name="phone" id="phone" required value=<?= filter_var($phone, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>>
            </div>
            <div>
                <label for="email">Email: </label><br>
                <input type="email" name="email" id="email" required value=<?= filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>>
            </div>
            <div>
                <label for="objet">Objet du message :</label><br>
                <input type="text" name="objet" value=<?= filter_var($objet, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>>
            </div>
            <div>
                <label for="message">Votre message:</label>
                <br>
                <textarea name="message" id="message" cols="30" rows="10" required value=<?= filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>></textarea>
            </div>
            <div>
                <input type="submit" value="Envoyer" class="submit">
                <div class="alertSuccess"> Votre message a bien été envoyé</div>
            </div>
        </form> -->
    </div>
    </div>
</section>

<?php
include_once __DIR__ . "/../templateUtils/footer.php";
