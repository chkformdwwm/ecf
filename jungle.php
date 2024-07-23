<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./scripts/navbarscroll.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<?php require_once __DIR__ . "/assets/templates/navbar.php";
require_once __DIR__ . "/assets/lib/pdo.php";
require_once __DIR__ . "/assets/lib/admin_animals.php"; ?>

<body>
    <!--HEADER START-->
    <header class="d-flex justify-content-center">
        <div class="d-flex align-items-end">
            <div class="container position-absolute cover_text">
                <h1 class="display-1 fw-bold text-light cover_title">Jungle</h1>
                <p class="lead mb-4 fw-medium text-light cover_paragraph">La jungle est un écosystème riche et vital, essentiel pour la biodiversité mondiale et le climat de notre planète.</p>
            </div>
            <div>
                <img src="assets/img/cover_jungle.jpg" class="cover_img w-100 h-100 img-fluid" alt="Un ibis rouge perché dans un arbre à large feuilles.">
            </div>
        </div>
    </header>
    <!--HEADER END-->



    <main>
        <div class="container d-flex my-5 py-5">
            <div class="container d-flex justify-content-center align-items-center pt-5">
                <div class="mx-5 d-flex flex-column align-items-center">
                    <h2 class="text-center mb-4 fw-bold">Découvrez les animaux de la jungle</h2>
                </div>
            </div>
        </div>

        <div>
            <div class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column">
                <section class="py-5 container">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                            <?php
                            // Récupération de tous les animaux de la table Animaux
                            $id = getAnimalById($pdo);
                            // tri du tableau pour obtenir uniquement les animaux du marais
                            asort($id);
                            function getJungleAnimals($animalId)
                            {
                                return $animalId['habitats_id'] === 2;
                            };

                            $jungleAnimals = array_filter($id, 'getJungleAnimals');

                            // Boucle pour afficher chacun des animaux du tableau
                            foreach ($jungleAnimals as $jungleAnimal) { ?>

                                <div class="col">
                                    <div class="mx-3 card h-100 shadow-sm">
                                        <div class="">
                                            <img src="./assets/img/<?= $jungleAnimal['photo_a'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        </div>
                                        <div class="card-body">
                                            <h2><?= $jungleAnimal['nom'] ?></h2>
                                            <h6 class=" card-subtitle mb-2 text-body-secondary"><?= $jungleAnimal['espece'] ?></h6>
                                            <div class="border-bottom mb-3"></div>
                                            <p class="card-text"><?= $jungleAnimal['description'] ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="">
                                                    <div class="d-flex mb-3">
                                                        <form action="" method="post">
                                                            <input id="id" name="id" type="hidden" value="<?= $jungleAnimal['id'] ?>" />
                                                            <input type="submit" value="Voir la fiche" formaction="animal.php" name="displayAnimal" class="btn btn-warning">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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