<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <?php



    require_once __DIR__ . "/assets/lib/pdo.php";
    require_once __DIR__ . "/assets/lib/avis-visiteurs.php";
    require_once __DIR__ . "/assets/templates/navbar.php";



    $reviews = getApprovedReviews($pdo);
    ?>

    <!--HEADER START-->
    <header class="d-flex justify-content-center">
        <div class="d-flex align-items-end">
            <div class="container position-absolute cover_text">
                <h1 class="display-1 fw-bold text-light">Zoo Arcadia</h1>
                <p class="lead fw-medium text-light">Un écoparc animalier aux portes de Brocéliande</p>
            </div>
            <div>
                <img src="assets/img/cover_index.jpg" class="w-100 h-100 img-fluid  cover_img" alt="Un tigre allongé sur une large souche d'abre coupé">
            </div>
        </div>
    </header>
    <!--HEADER END-->

    <main>

        <!--SECTION SERVICES START-->
        <section class="container d-flex my-5 py-5 col-xxl-12 col-lg-10 col-md-12">
            <div class="row">
                <div class=" container d-flex justify-content-center align-items-center col-xxl-6 col-lg-6">
                    <img src="./assets/img/thumb_services.png" alt="Un enfant vu de dos en gros plan, donnant à manger à un daim derrière la grille d'un enclos" class="img-fluid rounded-4 mx-5">
                </div>
                <div class=" container d-flex justify-content-center align-items-center pt-5 col-xxl-6 col-lg-6">
                    <div class="mx-5 d-flex flex-column">
                        <h2 class="text-center mb-4 fw-bold">Services</h2>
                        <p>Le Zoo Arcadia vous propose des services variés pour faciliter votre visite et la rendre inoubiable.</p>
                        <p>Pour vos repas, nos trois restaurants vous accueillent et sauront satisfaire les petits creux comme les grandes faims.</p>
                        <p>Vous pourrez agrémenter votre visite du zoo par un tour des habitats à bord de son petit train, ou bénéficier de la présence d'un guide qui vous accompagnera gratuitement.</p>

                        <div class="d-flex justify-content-center align-items-center">
                            <a href="services.php" class="btn btn-warning px-5 my-5">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION SERVICES END-->

        <!--SECTION HABITATS START-->
        <section class="container-fluid px-4 d-flex flex-column mb-5 py-2 col-xxl-12 col-xl-12 col-lg-12">

            <div class="container d-flex flex-column justify-content-center col-xxl-12 col-xl-12 col-lg-12">
                <h2 class="text-center mb-4 fw-bold">Habitats</h2>
                <p class="">Nos animaux sont installés sur plus de 8 hectares répartis en trois habitats
                    qui reproduisent chacun les conditions de vie d'un milieu naturel : savane, jungle et marais.
                    Partez à la rencontre des fameux Big Five, ces animaux de la brousse autrefois craints et respectés des
                    chasseurs africains. Revivez le Livre de la Jungle grandeur nature en compagnie de notre tigre Shere Khan,
                    et explorez le marais, repères des crocodiles et des hippopotames.</p>
            </div>

            <div class="container d-flex flex-md-row align-items-sm-center justify-content-sm-center align-items-md-stretch flex-column mt-4 justify-content-center col-xxl-12 col-xl-12 col-lg-12 col-md-10">
                <div class="card me-md-5 mb-5" style="width: 21rem;">
                    <div id="carouselcardSavane" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/savane_thumb_card_1.jpg" class="d-block w-100" alt="La tête d'un lion en plan rapproché">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/savane_thumb_card_2.jpg" class="d-block w-100" alt="Un zèbre vu de dos, tournant la tête vers l'appareil photo'">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/savane_thumb_card_3.jpg" class="d-block w-100" alt="Trois éléphants et un éléphanteau en file indienne dans la savane">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselcardSavane" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselcardSavane" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Savane</h5>
                        <p class="card-text">La savane est un écosystème complexe et dynamique, où les intercations entre le climat,
                            la végétation et la faune créent un équilibre unique et vital pour la biodiversité de notre planète..</p>
                        <a href="savane.php" class="btn btn-warning">Découvrir</a>
                    </div>
                </div>
                <div class="card me-md-1 mb-5" style=" width: 21rem;">
                    <div id="carouselCardJungle" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/jungle_thumb_card_1.jpg" class="d-block w-100" alt="Un python vert lové sur une branche dans l'obscurité">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/jungle_thumb_card_2.jpg" class="d-block w-100" alt="Un tigre vu de profil en gros plan">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/jungle_thumb_card_3.jpg" class="d-block w-100" alt="Un koala endormi, blotti contre une branche d'arbre qu'il agrippe de ses pattes">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCardJungle" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCardJungle" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Jungle</h5>
                        <p class="card-text">La jungle est un écosystème riche et vital, essentiel pour la biodiversité mondiale et le climat de notre planète..</p>
                        <a href="jungle.php" class="btn btn-warning">Découvrir</a>
                    </div>
                </div>
                <div class="card ms-md-5 mb-5" style=" width: 21rem;">
                    <div id="carouselCardMarais" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/marais_thumb_card_1.jpg" class="d-block w-100" alt="L'oeil d'un crocodile brillant dan l'obscurité">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/marais_thumb_card_2.jpg" class="d-block w-100" alt="Un flamand rose vu de profil en gros plan">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/marais_thumb_card_3.jpg" class="d-block w-100" alt="Un hippopotame de profil ouvrant grand la gueule pour attraper une poignée d'herbe">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCardMarais" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCardMarais" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Marais</h5>
                        <p class="card-text">Les marais sont des écosystèmes riches en biodiversité, indispensables à la régulation hydrologique et à la purification de l'eau.</p>
                        <a href="#" class="btn btn-warning">Découvrir</a>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center mb-5 ">
                <a href="services.php" class="btn btn-warning px-5 my-5">Tous les habitats</a>
            </div>

        </section>
        <!--SECTION HABITATS START-->


        <!--SECTION AVIS START-->
        <section class="d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center">
                <div class=" container-fluid position-absolute mb-md-5 pb-md-5 ms-md-5 d-flex align-items-center justify-content-center">
                    <div class=" col-lg-6 px-3 py-2 py-sm-5 px-md-5 py-md-5 bg-dark bg-opacity-75 mt-md-5 rounded-4">
                        <h1 class="display-md-4 fw-md-bold text-light text-center">Vos avis</h1>
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active mb-md-5">
                                    <p class="lead mb-md-4 fw-normal text-light text-center mt-md-5">Une expérience inoubliable</p>
                                    <p class="lead mb-md-4 fs-6 text-light text-center">Marie</p>
                                </div>
                                <?php
                                foreach ($reviews as $review) { ?>
                                    <div class="carousel-item  mb-md-5">
                                        <p class="lead mb-md-4 fw-normal text-light text-center mt-5"><?= $review['avis'] ?></p>
                                        <p class="lead mb-md-4 fs-6 text-light text-center"><?= $review['auteur'] ?></p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <button class="carousel-control-prev pt-5  mt-md-5 pt-md-5" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next pt-5 mt-md-5 pt-md-5" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="text-light" href="avis.php">Déposer un avis</a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="assets/img/lionne.png" class="darken_img w-100 h-100 img-fluid" alt="Deux lionnes allongées sur un rocher, une de face et l'autre de dos derrière elle">
                </div>
            </div>
        </section>
        <!--SECTION AVIS END-->
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
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>

</body>


</html>