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

                <section class="py-5  container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="text-center fw-light">Habitats</h1>
                            <p class="text-center lead text-body-secondary">Les trois habitats du zoo</p>
                        </div>
                    </div>


                    <div class="d-flex flex-row">

                        <?php
                        $habitats = getHabitats($pdo);



                        foreach ($habitats as $habitat) { ?>

                            <div class="col mx-3 card shadow-sm">
                                <div class="">
                                    <div>
                                        <img src="../../assets/img/<?= $habitat['photos'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    </div>

                                    <div class="card-body ">
                                        <h2><?= $habitat['name'] ?></h2>
                                        <p class="card-text"><?= $habitat['description'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">

                                                <form action="" method="post">
                                                    <input id="id" name="id" type="hidden" value="<?= $savaneAnimal['id'] ?>" />
                                                    <input type="submit" value="Voir les animaux" formaction="<?= $habitat['vet_url'] ?>" name="displayAnimal" class="btn btn-primary mx-2">
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </section>







            </div>

            <footer>
                <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
            </footer>

            <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
            </script>
</body>