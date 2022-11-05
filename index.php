<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./commun/menu.css">
    <link rel="stylesheet" href="./commun/base.css">
    <link rel="stylesheet" href="./commun/footer.css">
    <!-- complement HEAD -->
    <title>Les Belles Choses - acceuil</title>
    <link rel="stylesheet" href="./acceuil/index.css">

<!-- header commun --> 
</head>
<body>
    <header>
        <div id="headerGauche">
        <div id="logo"><img src="./commun/img/logo_attente_redimensionne.jpg" alt="logo du site"></div>
            <a href="./index.php"><p>LES BELLES CHOSES</p></a>
        </div>
        <div id="scene_deco">
            <div id="deco">
                <a href="#under_header" class="lien_trait">
                    <p id="lien_haut_de_page">haut de page</p>
                    <div id="trait_left" class="trait deco"></div>
                </a>
                <div id="motif_central">
                    <div id="bordures_losange"></div>
                    <div id="deco_losange" class="deco"></div>
                </div>
                <a href="#bas_de_page" class="lien_trait">
                    <p id="lien_bas_de_page">bas de page</p>
                    <div id="trait_right" class="trait deco"></div>
                </a>
            </div>
        </div>
        <nav id="header_nav">
            <ul id="header_ul">
                <li class="header_nav_lien_pp" id="header_galerie"><a href="./galeries/galerie.php">LES GALERIES</a>
                    <ul class="header_submenu">
                        <li class="header_nav_lien_sd"><a href="./galeries/objets.php">les objets</a></li>
                        <li class="header_nav_lien_sd"><a href="./galeries/vetements.php">les vêtements</a></li>
                    </ul>
                </li>
                <li class="header_nav_lien_pp" id="header_presentation"><a href="./presentation/presentation.php">PRÉSENTATION</a></li>
                <li class="header_nav_lien_pp" id="header_contact"><a href="./contact/contact.php">CONTACTS</a>
                    <ul class="header_submenu">
                        <li class="header_nav_lien_sd"><a href="mailto:josselin.prevost-devweb@mailo.fr" title="josselin.prevost-devweb@mailo.fr">email</a></li>
                        <li class="header_nav_lien_sd"><a href="https://www.facebook.com/" target="_blank">facebook</a></li>
                        <li class="header_nav_lien_sd"><a href="https://www.pinterest.fr/" target="_blank">pinterest</a></li>
                    </ul>
                </li>
            </ul>
        </nav> 
    </header>
    <div id="under_header"></div>
    <div id="main">

    <!-- CORP -->
    <section>
        <h1>Antiquités, Brocante & autres curiosités</h1>
        <div class="scene_carrousel">
            <div class="carrousel">
                <div class="item_carrousel"><img src="https://picsum.photos/500?random=1" alt="photo_acceuil"></div>
            </div>
        </div>
    </section>
    <section>
        <h1>Informations</h1>
        <h2>adresse</h2>
            <p>78 rue des colombin <br>
            31500 Toulouse</p>
        <div class="container_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.213195088976!2d1.4380847158890881!3d43.602102429123086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb63a5b5cb1f%3A0xaa409065123923ce!2sCapitole%2C%20Toulouse!5e0!3m2!1sfr!2sfr!4v1655745301529!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <h2>horaires</h2>
        <ul>
            <li>lundi : 10h - 12h & 14h - 19h</li>
            <li>mardi : 10h - 12h & 14h - 19h</li>
            <li>marcredi : 10h - 12h & 14h - 19h</li>
            <li>jeudi : 10h - 12h & 14h - 19h</li>
            <li>vendredi : 10h - 12h & 14h - 19h</li>
            <li>samedi : 10h - 12h & 14h - 19h</li>
            <li>dimanche : 10h - 12h & 14h - 19h</li>
        </ul>
        <h2>contacts</h2>
        <ul>
            <Li>tél : 00.00.00.00.00</Li>
            <Li>mail : @</Li>
            <Li>facebook</Li>
            <Li>pinterest</Li>
        </ul>
    </section>

<?php include "./commun/footer&script.php"; ?>