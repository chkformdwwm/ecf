<?php
require_once __DIR__ . "../../assets/lib/session.php";
require_once __DIR__ . "../../assets/lib/pdo.php";
require_once __DIR__ . "../../assets/lib/user.php";
require_once __DIR__ . "../../assets/lib/config_services.php";
require_once __DIR__ . "../../assets/lib/config_habitats.php";
require_once __DIR__ . "../../assets/lib/avis-visiteurs.php";

if (!isUserConnected()) {
    header('Location:../../login.php');
}


?>

<link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">

<body>
    <header class="d-flex justify-content-center">

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
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="habitats.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../services.php">Tous les services</a></li>
                        <li><a class="dropdown-item" href="../../restauration.php">Restauration</a></li>
                        <li><a class="dropdown-item" href="../../animations.php">Animations</a></li>

                    </ul>
                <li><a href="../../avis.php" class="nav-link px-2">Avis</a></li>
                <li><a href="../../contact.php" class="nav-link px-2">Contact</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu de votre espace</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="accueil_employe.php">Accueil</a></li>
                        <li><a class="dropdown-item" href="accueil_employe.php#Habitats">Habitats</a></li>
                        <li><a class="dropdown-item" href="accueil_employe.php#Services">Services</a></li>
                        <li><a class="dropdown-item" href="accueil_employe.php#Avis">Avis</a></li>
                    </ul>
                </li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="login.php"> <button type="button" class="btn btn-outline-primary me-2">Connexion</button></a>

            </div>
        </header>

    </header>
    <div class="col-md-3 text-end">
        <?php if (isset($_SESSION['user'])) { ?>
            <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
        <?php } else { ?>
            <a href="../../login.php"><button type="button" class="btn btn-primary me-2">Déconnexion</button></a>
        <?php } ?>
    </div>

    <main>
        <section>


            <?php


            $reviews = getReviews($pdo);

            $errorReview = [];


            if (isset($_POST['validateReview'])) {
                if (!empty($_POST['email'])) {
                    $add = validateReview($pdo, $_POST['email'], $_POST['auteur'], $_POST['avis']);
                } else {
                    //erreur
                    $errorReview[] = "L'avis n'a pas été envoyé.";
                }
            } else {
                //erreur
                $errorReview[] = "Ce champs est obligatoire.";
            }


            if (isset($_POST['deleteReview'])) {
                if (!empty($_POST['email'])) {
                    $delete = deleteReview($pdo, (int)$_POST['id']);
                    header('Location: nouveaux_avis.php?id=' . $delete);
                    if ($res) {
                    } else {
                        //erreur
                        $errorReview[] = "L'avis n'a pas été envoyé.";
                    }
                } else {
                    //erreur
                    $errorReview[] = "Ce champs est obligatoire.";
                }
            }




            ?>




            <div class="container mt-5 pt-5">
                <div class="text-center mx-5 px-5 my-5 py-5">
                    <h1 class="fw-bold fs-2 my-5">Avis visiteurs</h1>
                    <p>Vous devez valider les avis pour qu'ils puissent s'afficher sur le site web.</p>
                </div>

                <div class="container col-10">
                    <div class="container mt-5 pt-5">
                        <div>

                            <div>
                                <h2 class="text-center mb-5 pb-5">Nouveaux avis</h2>
                            </div>
                            <div>

                                <?php

                                $reviews = getReviews($pdo);

                                if ($reviews === []) {
                                    echo 'Aucun nouvel avis.';
                                } else

                                    foreach ($reviews as $review) {


                                ?>



                                    <div>

                                        <?php if (isset($_POST['okReview'])) {
                                            echo 'Avis validé';
                                        } else ?>
                                        <p>Auteur : <?= $review['auteur'] ?></p>
                                        <p>Avis : <?= $review['avis'] ?></p>
                                        <p><a href="e_modifier_avis.php" class="btn btn-primary mx-2">Voir</a>
                                            <input id="id" name="id" type="hidden" value="<?= $review['id'] ?>" />


                                        <div class=" border-bottom"> <?php } ?>
                                        </div>


                                    </div>
                            </div>

                        </div>
                    </div>
                </div>



        </section>
    </main>



    <footer>
        <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
    </footer>
</body>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

</html>