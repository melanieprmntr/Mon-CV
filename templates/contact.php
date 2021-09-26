<?php

include_once __DIR__ . "/../templateUtils/header.php";


?>


<section id="contact">

    <div class="title-main-left-darkblue ">

        <h2># Contact</h2>
    </div>

    <div class="container yellow">
        <div>
            <p>Je suis joingnable par <phone><i class="fas fa-phone"> 06 73 57 59 33</i> </phone> , par <a href="mailto:melanie.parmentier@outlook.fr"><i class="far fa-envelope"></i></a> ou via le
                formulaire de contact ci-dessous.
            </p>

            <form action="#" method="post">
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
                    <input type="text" name="text" id="name">
                </div>
                <div>
                    <label for="firstname">Prénom: </label><br>
                    <input type="text" name="text" id="firstname">
                </div>
                <div>
                    <label for="emailinput">Email: </label><br>
                    <input type="email" name="emailinput" id="emailinput" placeholder="contact@demo.fr">
                </div>
                <div>
                    <label for="message">Votre message:</label>
                    <br>
                    <textarea name="text" id="message" cols="30" rows="10"></textarea>
                </div>
                <br>
                <div>
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>

</section>


<?php

include_once __DIR__ . "/../templateUtils/footer.php";
