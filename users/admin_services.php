<?php
require_once __DIR__ . "../../assets/lib/session_admin.php";

require_once __DIR__ . "../../assets/lib/user.php";
require_once __DIR__ . "../../assets/lib/pdo.php";
require_once __DIR__ . "../../assets/lib/config_services.php";
require_once __DIR__ . "../../assets/lib/config_habitats.php";
require_once __DIR__ . "../../assets/lib/admin_animals.php";

if (!isAdminConnected()) {
    header('Location:administration.php');
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
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="habitats.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../..services.php">Tous les services</a></li>
                        <li><a class="dropdown-item" href="../..restauration.php">Restauration</a></li>
                        <li><a class="dropdown-item" href="../..animations.php">Animations</a></li>

                    </ul>
                </li>
                <li><a href="../../avis.php" class="nav-link px-2">Avis</a></li>
                <li><a href="../../contact.php" class="nav-link px-2">Contact</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu de votre espace</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="accueil_admin.php">Accueil</a></li>
                        <li><a class="dropdown-item" href="admin_habitats.php">Habitats</a></li>
                        <li><a class="dropdown-item" href="admin_services.php">Services</a></li>
                        <li><a class="dropdown-item" href="user_list.php">Utilisateurs</a></li>
                    </ul>
                </li>
            </ul>

            <div class="col-md-3 text-end">

                <?php if (isset($_SESSION['admin'])) { ?>
                    <a href="admin_logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } else { ?>
                    <a href="administration.php"><button type="button" class="btn btn-primary me-2">Déconnexion</button></a>
                <?php } ?>




            </div>
        </header>



        <?php
        require_once __DIR__ . "../../assets/lib/session_admin.php";

        require_once __DIR__ . "../../assets/lib/user.php";
        require_once __DIR__ . "../../assets/lib/pdo.php";
        require_once __DIR__ . "../../assets/lib/config_services.php";
        require_once __DIR__ . "../../assets/lib/config_habitats.php";

        if (isset($_POST['newService'])) {
            $add = newService($pdo, $_POST['name'], $_POST['description'], $_POST['photos']);
        } else

        if (isset($_POST['deleteService'])) {
            $delete = deleteService($pdo, (int)$_POST['id']);
        } else


if (isset($_GET['updateService'])) {
            $id = $_GET['id'];
        }

        ?>
        <main>
            <div class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column">

                <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
                <p class="text-center mb-5 pb-5">Espace administrateur</p>


                <section class="py-5 container">
                    <div class="row py-lg-5">
                        <div class="col-lg-10 col-md-8 mx-auto">
                            <h1 class="fw-light text-center">Services</h1>

                        </div>






                    </div>
            </div>


            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">




                    <?php

                    $services = getServices($pdo);



                    foreach ($services as $service) { ?>




                        <div class="col">
                            <div class="mx-3 card h-100 shadow-sm">
                                <div class="">
                                    <img src="../../assets/img/<?= $service['photos'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                </div>
                                <div class="card-body row">
                                    <h2><?= $service['name'] ?></h2>
                                    <p class="card-text"><?= $service['description'] ?></p>
                                    <div class="d-flex justify-content-start align-items-end">

                                        <!--Suppression / modification-->
                                        <form action="" method="post">
                                            <div>
                                                <input id="id" name="id" type="hidden" value="<?= $service['id'] ?>" />
                                                <input type="submit" value="Supprimer" name="deleteService" class="btn btn-primary mx-2" onclick="return confirm('Êtes-vous certain.e de vouloir supprimer ce service ?')">
                                            </div>
                                        </form>
                                        <form action="" method="get">
                                            <div>
                                                <input id="id" name="id" type="hidden" value="<?= $service['id'] ?>" />
                                                <input type="submit" value="Modifier" formaction="admin_modifier_services.php?id=<?= $service['id'] ?>" name="updateService" class="btn btn-primary mx-2">
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

            </div>

            <div>
                <h2 class="text-center my-5 py-5">Ajouter un service au sein du zoo</h2>


                <div class="container mb-5 pb-5">
                    <form action="" method="post">


                        <div>
                            <label for="name" class="form-label">Nom du service</label>
                            <input id="service_description" type="text" name="name" class="form-control" required />
                        </div><br />


                        <div>
                            <label for="description" class="form-label">Description</label>
                            <textarea id="service_description" name="description" rows="4" cols="50" class="form-control" required></textarea>
                        </div><br />


                        <div>
                            <label for="photos" class="form-label">Photo</label>
                            <input id="photos" type="text" name="photos" class="form-control" placeholder="Indiquer le nom du fichier, par exemple : photo.jpg" required />
                        </div><br />

                        <div class="d-flex">
                            <input type="submit" value="Valider" name="newService" class="btn btn-primary mx-2">

                        </div>
                    </form>

                </div>
                </section>
            </div>
        </main>

    </header>

    <footer>
        <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
    </footer>
    <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
</body>