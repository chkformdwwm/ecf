<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitats</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./scripts/navbarscroll.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<?php require_once __DIR__ . "/assets/templates/navbar.php"; ?>

<body>
    <!--HEADER START-->
    <header class="d-flex justify-content-center">
        <div class="d-flex align-items-end">
            <div class="container position-absolute cover_text">
                <h1 class="display-1 fw-bold text-light">Animations</h1>
                <p class="lead mb-4 fw-medium text-light">Découvrez tous nos services pour organiser au mieux votre visite</p>
            </div>
            <div>
                <img src="assets/img/hero_presentation_petit-train.png" class="w-100 h-100 img-fluid cover_img" alt="La locomotive du petit train du zoo et son conducteur qui agite la main par la fenêtre.">
            </div>
        </div>
    </header>
    <!--HEADER END-->

    <main>
        <!--START PETIT TRAIN-->
        <section>
            <div class=" container d-flex my-5 py-5 col-xxl-12 col-lg-10 col-md-12">
                <div class="row">
                    <div id="petitTrain" class=" container d-flex justify-content-center align-items-center col-xxl-6 col-lg-6">
                        <img src="./assets/img/petit_train_du_zoo.jpg" class="card-img-top rounded-4" alt="Le petit train du zoo arrivant de face dans une forêt">
                    </div>
                    <div class=" container d-flex justify-content-center align-items-center pt-5 col-xxl-6 col-lg-6">
                        <div class="mx-5 d-flex flex-column">

                            <h2 class="text-center mb-4 fw-bold" id="petit_train">Visite du zoo en petit train</h2>
                            <p class="">Le zoo Arcadia, situé en Bretagne à l'orée de la légendaire forêt de Brocéliande,
                                offre une expérience unique grâce à son petit train qui permet aux visiteurs de découvrir ses
                                trois habitats distincts : la savane, la jungle et le marais.
                                S'étendant sur sept hectares, ce zoo est un havre de biodiversité et de découverte.</p>

                            <p class="">Dès l'entrée, le petit train invite à l'aventure. Le premier arrêt est la savane,
                                une vaste étendue herbeuse baignée de lumière. Le paysage, parsemé de quelques arbres et buissons,
                                rappelle les grandes plaines africaines. Les animaux qui y vivent sont typiques de ce milieu, adaptés
                                à des conditions arides et ouvertes. Le train avance lentement, permettant aux visiteurs
                                d'observer les comportements naturels de ces espèces fascinantes.</p>

                            <p class="">En quittant la savane, le train s'enfonce dans la jungle dense.
                                L'atmosphère change radicalement : la lumière devient tamisée, filtrée par une canopée épaisse.
                                Les bruits de la forêt, les chants des oiseaux et les murmures de la végétation
                                créent une ambiance immersive. Les animaux de la jungle, adaptés à cette végétation luxuriante,
                                se dévoilent progressivement aux yeux des visiteurs, offrant des moments de surprise et d'émerveillement.</p>

                            <p class="">Enfin, le train atteint les marais, un environnement humide et mystérieux. Les eaux stagnantes et les zones marécageuses
                                abritent une faune et une flore spécifiques. Les visiteurs peuvent observer les animaux
                                se déplacer dans cet habitat aquatique, souvent discrets et camouflés.
                                Le paysage est ponctué de plantes aquatiques et d'arbres émergents, créant une scène sereine et apaisante.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--END PETIT TRAIN-->

        <!--START VISITE GUIDEE-->
        <section>
            <div id="visiteGuidee" class="container d-flex my-5 py-5 col-xxl-12 col-lg-10 col-md-12">
                <div class="row">
                    <div class=" container d-flex justify-content-center align-items-center pt-5 col-xxl-6 col-lg-6">
                        <div class="mx-5 d-flex flex-column">
                            <h2 id="visite_guidee" class="text-center mb-4 fw-bold">La visite guidée du Zoo</h2>
                            <p class="pb-2">Les visiteurs
                                peuvent profiter d'une visite guidée gratuite, organisée deux fois par jour.
                                Cette activité permet de découvrir en profondeur les trois habitats reconstitués :
                                la savane, la jungle et le marais, chacun abritant des animaux caractéristiques de ces milieux naturels.</p>

                            <p class="pb-2">Chaque visite guidée est menée par un guide expérimenté, passionné par la faune et la flore.
                                Le matin, la première visite débute à 10h et l'après-midi, la seconde commence à 14h.
                                Les guides partagent des informations captivantes sur les comportements des animaux, leur alimentation,
                                ainsi que des anecdotes intéressantes sur leur vie en captivité et dans leur habitat naturel.</p>
                        </div>
                    </div>
                    <div class=" container d-flex justify-content-center align-items-center col-xxl-6 col-lg-6">
                        <img src="./assets/img/pass.jpg" class="card-img-top rounded-4" alt="Un jeune enfant de dos en gros plan lit une carte qu'il tient dépliée entre ses mains">
                    </div>
                </div>
            </div>
        </section>
        <!--END VISITE GUIDEE-->
    </main>




    <!-------------------------------------------------FOOTER------------------------------------------------->
    <footer>
        <div class="container-fluid custom_footer">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-5">
                <div class="col mb-3 d-flex flex-column justify-content-center align-items-start">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <img src="./assets/img/logo.png" class="w-100">
                    </a>
                    <p class="footer-element">© 2024 Zoo Arcadia</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3 pb-5">
                    <h5 class="footer-element">Habitats</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="habitats.php" class="nav-link p-0 footer-element">Tous les habitats</a></li>
                        <li class="nav-item mb-2"><a href="savane.php" class="nav-link p-0 footer-element">Savane</a></li>
                        <li class="nav-item mb-2"><a href="jungle.php" class="nav-link p-0 footer-element">Jungle</a></li>
                        <li class="nav-item mb-2"><a href="marais.php" class="nav-link p-0 footer-element">Marais</a></li>

                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="footer-element">Services</h5>
                    <ul class=" nav flex-column">
                        <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 footer-element">Tous les services</a></li>
                        <li class="nav-item mb-2"><a href="restauration.php" class="nav-link p-0 footer-element">Restauration</a></li>
                        <li class="nav-item mb-2"><a href="animations.php#petit_train" class="nav-link p-0 footer-element">Petit train</a></li>
                        <li class="nav-item mb-2"><a href="animations.php#visite_guidee" class="nav-link p-0 footer-element">Visite guidée</a></li>

                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="footer-element">Nous joindre</h5>
                    <ul class=" nav flex-column">
                        <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 footer-element">Contact</a></li>
                        <li class="nav-item mb-2"><a href="avis.php" class="nav-link p-0 footer-element">Avis</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

</html>