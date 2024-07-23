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
                        <li><a class="dropdown-item" href="accueil_employe.php">Accueil</a></li>
                        <li><a class="dropdown-item" href="accueil_employe.php#Habitats">Habitats</a></li>
                        <li><a class="dropdown-item" href="accueil_employe.php#Services">Services</a></li>
                        <li><a class="dropdown-item" href="accueil_employe.php#Avis">Avis</a></li>
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




        <main>
            <div id="top" class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column">

                <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
                <p class="text-center mb-5 pb-5">Espace employé</p>

                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-center px-3"><a href="accueil_employe.php#Habitats">Habitats</a>
                    <p class="text-center px-3"><a href="accueil_employe.php#Services">Services</a>
                    <p class="text-center px-3"><a href="accueil_employe.php#Avis">Avis</a>
                </div>



                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 id="Habitats" class="fw-light">Habitats</h1>
                            <p class="lead text-body-secondary">Les trois habitats du zoo</p>
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

                                    <div class="card-body">
                                        <h2><?= $habitat['name'] ?></h2>
                                        <p class="card-text"><?= $habitat['description'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                                <form action="" method="post">
                                                    <input id="id" name="id" type="hidden" value="<?= $habitat['id'] ?>" />
                                                    <input type="submit" value="Voir les animaux" formaction="./repas_animaux.php#<?= $habitat['empl_url'] ?>" name="displayAnimal" class="btn btn-primary mx-2">
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

                <section class="py-5 container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 id="Services" class="fw-light">Services</h1>
                            <p class="lead text-center  text-body-secondary">Les services du zoo</p>
                            <p class="text-center"><a href="accueil_employe.php#top">Haut de page</a>


                            </p>
                        </div>
                    </div>


                    <div class="d-flex flex-row">




                        <?php

                        $services = getServices($pdo); ?>

                        <?php

                        foreach ($services as $service) { ?>






                            <div class="col mx-3 card shadow-sm">
                                <div class="">
                                    <img src="../../assets/img/<?= $service['photos'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                </div>
                                <div class="card-body">
                                    <h2><?= $service['name'] ?></h2>
                                    <p class="card-text"><?= $service['description'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <form action="" method="get">
                                                <div>
                                                    <input id="id" name="id" type="hidden" value="<?= $service['id'] ?>" />
                                                    <input type="submit" value="Modifier" formaction="modif_services.php?id=<?= $service['id'] ?>" name="updateService" class="btn btn-primary mx-2">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>


                    </div>
                </section>



                <section>


                    <?php
                    require_once __DIR__ . "../../assets/lib/pdo.php";
                    require_once __DIR__ . "../../assets/lib/avis-visiteurs.php";

                    $reviews = getReviews($pdo);

                    $errorReview = [];


                    if (isset($_POST['validateReview'])) {
                        if (!empty($_POST['email'])) {
                            $add = validateReview($pdo, $_POST['email'], $_POST['auteur'], $_POST['avis']);
                            header('Location: nouveaux_avis.php?id=' . $add);
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
                            <h1 id="Avis" class="fw-bold fs-2 my-5">Avis visiteurs</h1>
                            <p>Vous devez valider les avis pour qu'ils puissent s'afficher sur le site web.</p>
                            <p><a href="accueil_employe.php#top">Haut de page</a>
                        </div>

                        <div class="container col-10">
                            <div class="container mt-5 pt-5">
                                <div>

                                    <div>
                                        <h2 class="text-center">Nouveaux avis</h2>
                                    </div>
                                    <div>

                                        <?php



                                        foreach ($reviews as $review) { ?>

                                            <div">

                                                <p>Auteur : <?= $review['auteur'] ?></p>
                                                <p>Avis : <?= $review['avis'] ?></p>
                                                <p><a href="e_modifier_avis.php" class="btn btn-primary mx-2">Voir</a>
                                                    <input id="id" name="id" type="hidden" value="<?= $review['id'] ?>" />


                                                <div class="border-bottom"></div>

                                            <?php
                                        }
                                            ?>
                                    </div>
                                </div>

                            </div>
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