<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

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
                <h1 class="display-1 fw-bold text-light cover_title">Services</h1>
                <p class="lead mb-4 fw-medium text-light cover_paragraph">Manger sur le parc, faire une visite guidée, découvrir le zoo en petit train... découvrez tous nos services pour organiser au mieux votre visite!</p>
            </div>
            <div>
                <img src="assets/img/cover_services.png" class="cover_img w-100 h-100 img-fluid" alt="La locomotive du petit train du zoo et son conducteur qui agite la main par la fenêtre.">
            </div>
        </div>
    </header>
    <!--HEADER END-->


    <main>
        <!--START RESTAURATION-->
        <section class="container-fluid col-xxl-12 col-lg-12">

            <div class="container">
                <h2 class="py-5  text-center">Restauration</h2>
                <p class="pb-5">Deux restaurants vous accueillent au sein du zoo, en plus des snacks où vous pourrez vous grignoter un petit en-cas et apaiser votre soif d'une boisson chaude où froide.</p>
            </div>
            <div class="container d-flex  flex-md-row">
                <div class="row">
                    <div class="col-md mb-5">
                        <div class="card h-100">
                            <img src="./assets/img/grandarcadia.jpg" class="card-img-top" alt="L'intérieur du restaurant Le grand Arcadia">
                            <div class="card-body">
                                <h5 class="card-title">Le Grand Arcadia</h5>
                                <p class="card-text">Le Grand Arcadia est notre restaurant historique, créé avec l'ouverture du zoo en 1960. Vous pourrez y déguster une cuisine de qualité faite de mets raffinés, préparés par notre chef Augusto.</p>
                                <a href="restauration.php#grandArcadia" class="btn btn-warning">Découvrir</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md mb-5">
                        <div class="card h-100">
                            <img src="./assets/img/safaribuffet.jpg" class="card-img-top" alt="Un groupe de personnes attablées autour d'un repas">
                            <div class="card-body">
                                <h5 class="card-title">Le Safari Buffet</h5>
                                <p class="card-text">Ambiance internationale pour notre Saffari Buffet ! Vous y découvrirez les classiques de la bistronomie : burgers, entrecôtes, croques-monsieurs ou pizzas, ainsi que des plats végétariens variés.</p>
                                <a href="restauration.php#saffariBuffet" class="btn btn-warning">Découvrir</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card h-100">
                            <img src="./assets/img/snacks.jpg" class="card-img-top" alt="Un repas à emporter posé sur une table où est attablée une famille">
                            <div class="card-body">
                                <h5 class="card-title">Les snacks</h5>
                                <p class="card-text">Présents à divers endroits au sein du zoo, les snacks vous permettent de prendre un sandwich, une viennoiserie ou une boisson à emporter. Parfait pour une petite pause gourmande sur le pouce avant de reprendre votre visite.</p>
                                <a href="restauration.php#snacks" class="btn btn-warning">Découvrir</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--END RESTAURATION-->

        <!--START ANIMATIONS-->
        <section class="container-fluid">
            <div class="text-center py-5 my-5">
                <h2>Animations</h2>
            </div>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md mb-5">
                            <div class="card h-100">
                                <img src="./assets/img/petit_train.jpg" class="card-img-top" alt="Le petit train du zoo vu de face">
                                <div class="card-body">
                                    <h5 class="card-title">Petit train</h5>
                                    <p class="card-text">Présent depuis la création du zoo en 1960, notre petit train vous permet de partir explorer tous les habitats et de rejoindre plus rapidement un point éloigné du zoo.</p>
                                    <a href="restauration.php#petitTrain" class="btn btn-warning">Découvrir</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card h-100">
                                <img src="./assets/img/pass.jpg" class="card-img-top" alt="Un enfant vu de dos en gros plan, lisant une carte qu'il tient dépliée entre ses mains">
                                <div class="card-body">
                                    <h5 class="card-title">Visite guidée</h5>
                                    <p class="card-text">Nos guides vous accompagnent gratuitement pour vous faire découvrir tous les secrets du zoo les mieux gardés. Le matin, vous pourrez même assister avec eux au nourrisage des animaux.</p>
                                    <a href="restauration.php#visiteGuidee" class="btn btn-warning">Découvrir</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!--END SERVICESS-->

        <!--START CONSEILS ET FAQ-->
        <section>
            <div class="container">
                <h2 class="text-center py-5 my-5">Conseils pour une visite réussie</h2>
                <ul class="mx-5 mb-5">
                    <li class="py-3">Planifier votre visite dès votre arrivée : N'hésitez pas à consulter la carte du zoo disponible à l'accueil sous forme de brochure. Elle vous sera remise gratuitement par nos agents d'accueil lors de votre arrivée. Les heures de nourrissage, de visites guidées et de passage du petit train aux différents arrêts y sont également indiquées.
                    <li class="py-3">Soyez parés par tous les temps : Prévoyez des vêtements adaptés et des chaussures confortables. Le zoo est vaste et vous pourrez vous y promener sans limite durant toute la journée. N'oubliez pas de vous équiper pour vous protéger de la pluie et du soleil.
                    </li>
                    <li class="py-3">Respectez les animaux : Ne nourrissez pas les animaux avec des aliments non autorisés et observez une distance suffisante aux abords des enclos. Suivez les consignes des gardiens pour assurer votre sécurité et celle des animaux.
                    </li>
                    <li class="py-3">Profitez des moments de calme : Les matins et les fins d'après-midi sont souvent les moments les plus calmes au zoo. Cela permet de voir les animaux plus actifs et d'éviter les grandes foules.
                    </li>
                </ul>
            </div>


        </section>

        <!--END CONSEILS ET FAQ-->

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