<?php
require_once __DIR__ . "../../assets/lib/session.php";
require_once __DIR__ . "../../assets/lib/pdo.php";
require_once __DIR__ . "../../assets/lib/user.php";
require_once __DIR__ . "../../assets/lib/config_services.php";
require_once __DIR__ . "../../assets/lib/config_habitats.php";
require_once __DIR__ . "../../assets/lib/admin_animals.php";

if (!isUserConnected()) {
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

                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } else { ?>
                    <a href="../../login.php"><button type="button" class="btn btn-primary me-2">Déconnexion</button></a>
                <?php } ?>

            </div>
        </header>


        <?php


        ?>

        <main>
            <div class="d-flex flex-column">

                <div>
                    <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
                    <p class="text-center mb-5 pb-5">Espace employé</p>
                    <p class="text-center"><a href="repas_animaux.php">Revenir à la liste des animaux</a>
                </div>

                <div>
                    <?php $id = (int)$_GET['id'];
                    $animal = getVetVisit($pdo, $id); { ?>

                        <div>


                            <h2 class="text-center my-5 py-5">Consulter le dernier compte-rendu vétérinaire</h2>
                            <div class="d-flex flex-column align-items-center">
                                <div class="w-25 my-5">
                                    <img src=" ../../assets/img/<?= $animal['animaux_photo_c'] ?>" class="rounded-circle img-thumbnail">
                                </div>
                            </div>
                            <h1 class="fw-bold text-center mb-5"><?= $animal['animaux_nom'] ?></h1>

                            <div class="container mx-5 px-5">

                                <p class="mx-5 px-5"><span class="fw-bold">Date de visite vétérinaire : </span><span><?= $animal['passage'] ?></span></p>
                                <p class="mx-5 px-5"><span class="fw-bold">Nourriture prescrite : </span><span><?= $animal['nourriture'] ?></span></p>
                                <p class="mx-5 px-5"><span class="fw-bold">Quantité : </span><span><?= $animal['ration'] ?></span></p>
                                <p class="mx-5 px-5"><span class="fw-bold">État de santé : </span><span><?= $animal['etat_animal'] ?></span></p>
                            </div>


                        </div>
                    <?php } ?>
                </div>

            </div>
        </main>
    </div>
    <footer class="">
        <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
    </footer>
    <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>