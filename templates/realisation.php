<?php
$title = "Mélanie Parmentier création de sites internet";
$description = "Création de sites internet, en Html5, CSS, Php natif,Javascript, WordPress, HTML5 UP";
$h1 = "Créations de sites internet";

include_once __DIR__ . "/../templateUtils/header.php";
?>

<section id="realisation">
    <div class="title-main-left title-main">
        <h2># Réalisations</h2>
    </div>
    <div class="container lightblue grid1">
        <h3 class="grid1h3">
            Voici mes premiers projets de sites internet mis en ligne. Pour le transfert des fichiers, j'ai utilisé Filezilla. Mes sites ont un certificat SSL et sont en Https. Pour l'hébergement, j'ai choisi OVH.
        </h3>
        <article class="item background-color">
            <h3>Mon site CV</h3>
            <img src="/../img/melanie-parmentier-developpeur-web.png" alt="capture d'écran site : www.melanie-parmentier-developpeur-web.fr">
            <p>
                J'ai développé ce site en HTML/CSS. J'ai utilisé du PHP natif avec des include pour éviter les répétitions de code. Et du Javascript, pour que la navbar reste fixe en haut de page quond on scrolle.
                <br><br>
                <a href="https://www.melanie-parmentier-developpeur-web.fr">Visiter le site </a>
            </p>
            <!-- </div> -->
        </article>
        <article class="item background-color">
            <h3>Mamie-garde-les-enfants</h3>
            <img src="/../img/mamie-garde-les-enfants.png" alt="capture d'écran du site www.mamie-garde-les-enfants.fr">
            <p>
                Pour ce projet de site internet, j'ai utilisé un template de HTML5 UP. Du php natif, pour éviter les répétitions de code pour le header et le footer.
                <br>
                <br>
                <a href="https://www.mamie-garde-les-enfants.fr"  target="_blank">Visiter le site </a>
            </p>
        </article>
        <div class="item background-color">
            <h3>
                Prochainement
            </h3>
            <!-- <img src="" alt=""> -->
            <p>
                Vous pourrez découvrir de nouvelles créations web ;)
            </p>
        </div>
        <!-- <div class="item background-color">
            <img src="img/4.jpg" alt="">
            <h4>
                Mon titre 4
            </h4>
            <p>
                Ici une petite description pour tester le carousel
            </p>
        </div>
        <div class="item background-color">
            <h4>
                Mon titre 5
            </h4>
            <p>
                Ici une petite description pour tester le carousel
            </p>
        </div> -->
    </div>

    </div>
</section>

<?php
include_once __DIR__ . "/../templateUtils/footer.php";
