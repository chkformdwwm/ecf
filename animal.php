<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
</head>

<?php

require_once __DIR__ . "/assets/lib/pdo.php";
require_once __DIR__ . "/assets/lib/admin_animals.php";

?>


<div class="d-flex flex-row">

    <div>
        <?php $id = $_POST['id'];
        $animal = getAnimalId($pdo, $id); { ?>

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="container col-xl-5 col-xxl-6 col-lg-4 col-md-4 position-absolute mb-5 pb-5 ms-5 d-flex align-items-center justify-content-start">
                            <div class=" px-5 py-5 bg-dark bg-opacity-75 mt-5 rounded-4">
                                <h1 class="display-2 fw-bold text-light "><?= $animal['animaux_nom'] ?></h1>
                                <h4 class="display-5 fw-bold text-light "><?= $animal['animaux_espece'] ?></h4>
                                <p class="fs-5 fst-italic text-light "><?= $animal['animaux_espece_latin'] ?></p>

                                <div class="border-bottom mb-3"></div>
                                <p class="fs-6 fw-semibold text-light ">Santé : <span class="fw-light"> <?= $animal['etat_animal'] ?></span></p>


                            </div>
                        </div>
                        <img src="./assets/img/<?= $animal['animaux_photo_a'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="display-5 fw-bold"><?= $animal['animaux_nom'] ?></h3>
                            <p class="fs-4 fw-bold"><?= $animal['animaux_espece'] ?><span class="fw-light fst-italic"> (<?= $animal['animaux_espece_latin'] ?>)</span></p>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="container col-xl-5 col-xxl-6 col-lg-4 col-md-4 position-absolute mb-5 pb-5 ms-5 d-flex align-items-center justify-content-start">
                            <div class=" px-5 py-5 bg-dark bg-opacity-75 mt-5 rounded-4">
                                <h1 class="display-2 fw-bold text-light "><?= $animal['animaux_nom'] ?></h1>
                                <h4 class="display-5 fw-bold text-light "><?= $animal['animaux_espece'] ?></h4>
                                <p class="fs-5 fst-italic text-light "><?= $animal['animaux_espece_latin'] ?></p>

                                <div class="border-bottom mb-3"></div>
                                <p class="fs-6 fw-semibold text-light ">Santé : <span class="fw-light"> <?= $animal['etat_animal'] ?></span></p>


                            </div>
                        </div>
                        <img src="./assets/img/<?= $animal['animaux_photo_b'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="display-5 fw-bold"><?= $animal['animaux_nom'] ?></h3>
                            <p class="fs-4 fw-bold"><?= $animal['animaux_espece'] ?><span class="fw-light fst-italic"> (<?= $animal['animaux_espece_latin'] ?>)</span></p>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="container col-xl-5 col-xxl-6 col-lg-4 col-md-4 position-absolute mb-5 pb-5 ms-5 d-flex align-items-center justify-content-start">
                            <div class=" px-5 py-5 bg-dark bg-opacity-75 mt-5 rounded-4">
                                <h1 class="display-2 fw-bold text-light "><?= $animal['animaux_nom'] ?></h1>
                                <h4 class="display-5 fw-bold text-light "><?= $animal['animaux_espece'] ?></h4>
                                <p class="fs-5 fst-italic text-light "><?= $animal['animaux_espece_latin'] ?></p>

                                <div class="border-bottom mb-3"></div>
                                <p class="fs-6 fw-semibold text-light ">Santé : <span class="fw-light"> <?= $animal['etat_animal'] ?></span></p>

                            </div>
                        </div>
                        <img src="./assets/img/<?= $animal['animaux_photo_c'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="display-5 fw-bold"><?= $animal['animaux_nom'] ?></h3>
                            <p class="fs-4 fw-bold"><?= $animal['animaux_espece'] ?><span class="fw-light fst-italic"> (<?= $animal['animaux_espece_latin'] ?>)</span></p>

                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev d-flex align-items-end mb-5 pb-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-flex align-items-end mb-5 pb-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        <?php } ?>

    </div>



</div>

<!-------------------------------------------------FOOTER------------------------------------------------->
<footer>
    <div class="container-fluid custom_footer">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-5">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
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