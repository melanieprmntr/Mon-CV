<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="pjxLvdLIRzp_Fuizt0lhyRAWno5R0SQCBwNQ7Y6mylE" />
    <meta property="title" content="<?php echo $title ?>">
    <meta name="description" content="<?php echo $description ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/styleDesktop.css">
    <link rel="stylesheet" href="../style/styleTablette.css">
    <script src="https://kit.fontawesome.com/6c0b530104.js" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
        <div class="header-bg">
            <div class="cercle1 c1"></div>
            <h1 class="headerTitleH1 th1"><?= $h1?></h1>
            <h2 class="headerTitleH2 th2">Mélanie Parmentier</h2>
        </div>
        <nav class="navbar">
            <div class="dropdownmenu">
                <!-- <li><a href="/#presentation">
                        <div class="logoMP">
                            <div class="logoMPtext">
                                Mélanie Parmentier
                            </div>
                        </div>
                    </a>
                </li> -->
                <li class="color"><a href="../#presentation">A propos</a></li>
                <li class="color"><a href="../#formation">Formations</a></li>
                <li class="color"><a href="../#competences">Compétences</a></li>
                <li class="color"><a href="../#experience">Expériences</a></li>
                <li class="color"><a href="../templates/realisation.php">Réalisations</a></li>
                <li class="colorContact">
                    <!-- <a href="mailto:contact@melanie-parmentier-developpeur-web.fr">Contact</a> -->
                    <a href="/../templates/contact.php">Contact</a>
                </li>
            </div>
        </nav>
    </header>
    <!-- <img src="/img/Ellipse8logo.jpg" alt="Mélanie Parmentier"> -->