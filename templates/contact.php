<?php

include_once __DIR__ . "/../templateUtils/header.php";



?>


<section id="contact">

    <div class="title-main-left-darkblue ">

        <h2># Contact</h2>
    </div>

    <div class="container yellow">
        <!-- <div> -->
        <p>Je suis joingnable par <phone><i class="fas fa-phone"> 06 73 57 59 33</i> </phone> , par <a href="mailto:melanie.parmentier@outlook.fr"><i class="far fa-envelope"></i></a> ou via le
            formulaire de contact ci-dessous.
        </p>

        <form method="post" class="form">

            <!-- <div>
                    <label for="sexe">Civilité:</label>
                    <div>
                        <label for="masculin">Monsieur</label>
                        <input type="radio" name="sexe" id="masculin">
                        <label for="feminin">Madame</label>
                        <input type="radio" name="sexe" id="feminin">
                    </div>
                </div> -->
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
                <input type="submit" value="Envoyer" onclick="this.innerHTML=Div('Votre message a bien été envoyé')">
            </div>
        </form>
    </div>
    </div>

</section>


<?php

include_once __DIR__ . "/../templateUtils/footer.php";
