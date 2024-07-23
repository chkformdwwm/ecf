<?php
require_once __DIR__ . "../../assets/lib/session_vet.php";
require_once __DIR__ . "../../assets/lib/pdo.php";
require_once __DIR__ . "../../assets/lib/user.php";
require_once __DIR__ . "../../assets/lib/config_services.php";
require_once __DIR__ . "../../assets/lib/config_habitats.php";
require_once __DIR__ . "../../assets/lib/admin_animals.php";

if (!isUserVetConnected()) {
    header('Location:../../login.php');
}


?>

<link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">

<body>
    <div class="d-flex justify-content-center">

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom position-absolute">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="../../assets/img/logo.png" alt="logo du zoo Arcadia" class="w-75"> </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="../../index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="habitats.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Habitats</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../habitats.php">Tous les habitats</a></li>
                        <li><a class="dropdown-item" href="../../savane.php">Savane</a></li>
                        <li><a class="dropdown-item" href="../../jungle.php">Jungle</a></li>
                        <li><a class="dropdown-item" href="../../marais.php">Marais</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="habitats.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../services.php">Tous les services</a></li>
                        <li><a class="dropdown-item" href="../../restauration.php">Restauration</a></li>
                        <li><a class="dropdown-item" href="../../animations.php">Animations</a></li>

                    </ul>
                </li>
                <li><a href="../../avis.php" class="nav-link px-2">Avis</a></li>
                <li><a href="../../contact.php" class="nav-link px-2">Contact</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu de votre espace</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="accueil_veterinaire.php">Accueil</a></li>
                        <li><a class="dropdown-item" href="vet_savane.php">Savane</a></li>
                        <li><a class="dropdown-item" href="vet_jungle.php">Jungle</a></li>
                        <li><a class="dropdown-item" href="vet_marais.php">Marais</a></li>
                    </ul>
                </li>
            </ul>

            <div class="col-md-3 text-end">

                <?php if (isset($_SESSION['vet'])) { ?>
                    <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } else { ?>
                    <a href="../../login.php"><button type="button" class="btn btn-primary me-2">Déconnexion</button></a>
                <?php } ?>


            </div>
        </header>

        <main>
            <div class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column">

                <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
                <p class="text-center mb-5 pb-5">Espace vétérinaire</p>

                <section class="py-5 container">
                    <div class="row py-lg-5">
                        <div class="col-lg-10 col-md-8 mx-auto">
                            <h1 class="fw-light text-center">Marais</h1>
                            <h5 class="fw-light text-center">Animaux résidant au sein de l'espace Marais</h5>
                            <p class="text-center"><a href="accueil_veterinaire.php">Revenir à l'accueil de votre espace</a>


                        </div>
                    </div>


                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">




                            <?php

                            // Récupération de tous les animaux de la table Animaux
                            $id = getAnimalById($pdo);

                            // tri du tableau pour obtenir uniquement les animaux de la savane
                            asort($id);
                            function getMarshAnimals($animalId)
                            {
                                return $animalId['habitats_id'] === 3;
                            };

                            $marshAnimals = array_filter($id, 'getMarshAnimals');

                            // Boucle pour afficher chacun des animaux du tableau
                            foreach ($marshAnimals as $marshAnimal) { ?>

                                <div class="col">
                                    <div class="mx-3 card h-100 shadow-sm">
                                        <div class="">
                                            <img src="../../assets/img/<?= $marshAnimal['photos'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        </div>
                                        <div class="card-body">
                                            <h2><?= $marshAnimal['nom'] ?></h2>
                                            <h6 class=" card-subtitle mb-2 text-body-secondary"><?= $marshAnimal['espece'] ?></h6>
                                            <div class="border-bottom mb-2"></div>
                                            <p class="card-text"><?= $marshAnimal['description'] ?></p>
                                            <div class="d-flex justify-content-start align-items-end">
                                                <div class="row">


                                                    <div class="d-flex">
                                                        <form action="" method="get">
                                                            <input id="id" name="id" type="hidden" value="<?= $marshAnimal['id'] ?>" />
                                                            <input type="submit" value="Consulter" formaction="espace_vet.php" name="displayAnimal" class="btn btn-primary mx-2">
                                                        </form>
                                                        <form action="" method="get">
                                                            <input id="id" name="id" type="hidden" value="<?= $marshAnimal['id'] ?>" />
                                                            <input type="submit" value="Modifier" formaction="espace_vet.php" name="avisVeterinaire" class="btn btn-primary mx-2">
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

            <footer>
                <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
            </footer>
            <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
            </script>
</body>