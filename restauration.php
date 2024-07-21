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

<body>
    <!--HEADER START-->
    <header class="d-flex justify-content-center">



        <nav class=" navbar fixed-top d-flex justify-content-center pt-5 mt-2">
            <?php require_once __DIR__ . "/assets/templates/navbar.php"; ?>
        </nav>


        <div>
            <div class="d-flex align-items-end">
                <div class="container position-absolute mb-5 pb-5 ms-5">
                    <div class="col-lg-6 px-4">
                        <h1 class="display-1 fw-bold text-light">Restauration</h1>
                        <p class="lead mb-4 fw-medium text-light">Manger sur le parc, faire une visite guidée, découvrir le zoo en petit train... découvrez tous nos services pour organiser au mieux votre visite!</p>
                    </div>
                </div>

                <div>
                    <img src="assets/img/cover_restauration.png" class="cover__image w-100 h-100 img-fluid" alt="La locomotive du petit train du zoo et son conducteur qui agite la main par la fenêtre.">
                </div>
            </div>
        </div>

    </header>
    <!--HEADER END-->


    <main>
        <!--START RESTAURATION-->
        <section>
            <div class="container my-5 py-5" id="grandArcadia">
                <div class="row">
                    <div class="col-md">
                        <img src="./assets/img/grandarcadia.jpg" class="card-img-top rounded-4" alt="L'intérieur du restaurant Le grand Arcadia où des clients sont attablés">
                    </div>
                    <div class="col-md">
                        <h2>Le Grand Arcadia</h2>
                        <p> Le Grand Arcadia vous propose son cadre traditionnel et sa cuisine gastronomique dans un environnement historique,
                            entièrement rénonvé apr-s trois années de travaux ! Avec sa déco remise au goût du jour, le Grand Arcadia sait satisfaire nos clients les plus exigeants.
                            Vous trouverez à la carte de délicieux plats de saisons cuisinés par le chef Augusto à partir de produits frais locaux.</p>

                        <p>Les réservations se font par téléphone au 02.38.30.32.31 ou à l'accueil du zoo, dès votre arrivée.</p>
                        <p>Le restaurant est ouvert du lundi au dimanche, de 11h00 à 23h00.</p>
                    </div>
                </div>
            </div>


            <div class=" container my-5 py-5" id="safariBuffet">
                <div class="row">
                    <div class="col-md ml-5">
                        <h2>Le Safari Buffet</h2>
                        <p>Le Safari Buffet vous invite à déguster des plats savoureux et copieux à toute heure de la journée, dès 11h du matin.
                            Sa cuisine conviviale et facile à vivre saura satisfaire toutes les papilles, dans un décor chaleureux et une ambiance familiale.
                        </p>
                        <p>Un brunch gourmand y est servi en début de matinée, pour ceux d'entre vous qui auraient besoin de prendre des forces avant d'attaquer l'exploration du zoo.
                        </p>
                        <p>Le restaurant est ouvert du lundi au dimanche, de 9h00 à 23h00. Il ne prend pas de réservation.</p>
                    </div>
                    <div class="col-md">
                        <img src="./assets/img/safaribuffet.jpg" class="card-img-top rounded-4" alt="Un groupe de personnes attablées devant un repas">
                    </div>
                </div>
            </div>

            <div class="container my-5 py-5" id="snacks">
                <div class="row">
                    <div class="col-md">
                        <img src="./assets/img/snacks.jpg" class="card-img-top rounded-4" alt="Une famille avec enfants attablée devant un repas à emporter">
                    </div>
                    <div class="col">

                        <h2>Les snacks</h2>
                        <p>Tout au long de votre visite, vous pourrez prendre une petite pause pour vous restaurer et étancher votre soif dans l'un des 6 snacks répartis au sein du zoo.</p>

                        <p>Leur présence vous est indiquée par la signalétique tout au long de votre parcours, et vous saurez vite les repérer de loin.</p>

                        <p>Outre le classique assortiment de sandwiches baguette, vous pourrez y commander des crèpes salées ou sucrées à emporter ou à déguster sur place.</p>

                        <p>Les snacks sont ouverts tous les jours, de 9h à 22h.</p>

                    </div>

                </div>
            </div>

        </section>

        <!--END RESTAURATION-->


    </main>




    <!-------------------------------------------------FOOTER------------------------------------------------->
    <footer>
        <div class="container-fluid custom_footer ps-5">
            <div class="row row-cols-5 row-cols-sm-5 row-cols-md-5 pt-5 mt-5">




                <div class="col-4 mb-md-3 pb-md-5">
                    <h5 class="footer-element">Habitats</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="habitats.php" class="nav-link p-0 footer-element footer_link">Tous les habitats</a></li>
                        <li class="nav-item mb-2"><a href="savane.php" class="nav-link p-0 footer-element footer_link">Savane</a></li>
                        <li class="nav-item mb-2"><a href="jungle.php" class="nav-link p-0 footer-element footer_link">Jungle</a></li>
                        <li class="nav-item mb-2"><a href="marais.php" class="nav-link p-0 footer-element footer_link">Marais</a></li>

                    </ul>
                </div>

                <div class="col-4 mb-3">
                    <h5 class="footer-element">Services</h5>
                    <ul class=" nav flex-column">
                        <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 footer-element footer_link">Tous les services</a></li>
                        <li class="nav-item mb-2"><a href="restauration.php" class="nav-link p-0 footer-element footer_link">Restauration</a></li>
                        <li class="nav-item mb-2"><a href="animations.php#petit_train" class="nav-link p-0 footer-element footer_link">Petit train</a></li>
                        <li class="nav-item mb-2"><a href="animations.php#visite_guidee" class="nav-link p-0 footer-element footer_link">Visite guidée</a></li>

                    </ul>
                </div>

                <div class="col-4 mb-3">
                    <h5 class="footer-element">Nous joindre</h5>
                    <ul class=" nav flex-column">
                        <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 footer-element footer_link">Contact</a></li>
                        <li class="nav-item mb-2"><a href="avis.php" class="nav-link p-0 footer-element footer_link">Avis</a></li>

                    </ul>

                </div>

                <div class="col-4 align-items-end">

                    <p class="footer-element footer_copyright">© 2024 Zoo Arcadia</p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

</html>