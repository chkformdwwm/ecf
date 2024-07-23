<?php
require_once __DIR__ . "../../assets/lib/session.php";
require_once __DIR__ . "../../assets/lib/pdo.php";
require_once __DIR__ . "../../assets/lib/user.php";
require_once __DIR__ . "../../assets/lib/config_services.php";
require_once __DIR__ . "../../assets/lib/config_habitats.php";

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



        <?php



        if (isset($_POST['updateService'])) {
            $update = updateService($pdo, $_POST['name'], $_POST['description'], $_POST['photos'], (int)$_GET['id']);
        }

        ?>

        <main>
            <div class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column">

                <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
                <p class="text-center mb-5 pb-5">Espace employé</p>
            </div>

            <section class="">

                <div class="mb-5">
                    <h1 class="fw-light text-center mb-5">Modification du service</h1>
                    <p class="lead text-body-secondary text-center">Insérez vos modifications pour ce service</p>
                    <p>
                </div>


                <?php
                $id = $_GET['id'];
                $service = getServiceById($pdo, $id);

                ?>

                <div class="container mb-5 pb-5">
                    <p><?php if (isset($_POST['updateService'])) {
                        ?>
                    <p class="text-center alert alert-success" role="alert"> <?= 'Les informations ont bien été enregistrées.'; ?></p>
                <?php  }  ?> <br>

                </p>


                </p>

                <?php if (!isset($_POST['updateService'])) { ?>

                    <form action="" method="post">
                        <div>
                            <label for="name" class="form-label">Nom du service</label>
                            <input id="name" type="text" name="name" class="form-control" value="<?= $service['name'] ?>" required />
                        </div>

                        <div>
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" rows="4" cols="50" class="form-control" required><?= $service['description'] ?></textarea>
                        </div>

                        <div>
                            <label for="photos" class="form-label">Photo</label>
                            <input id="photos" type="text" name="photos" class="form-control" value="<?= $service['photos'] ?>" required />
                        </div>

                        <div class="mt-4">
                            <input type="submit" value="Valider les modifications" formaction="modif_services.php?id=<?= $service['id'] ?>" name="updateService" class="btn btn-primary mx-2">
                        </div>
                    </form>

                <?php } ?>

                <div class="mt-5 text-center"><a href="accueil_employe.php">Revenir à l'accueil de votre espace.</div>




                </div>


            </section>

    </div>

    </main>

    <footer>
        <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
    </footer>
</body>
<script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

</html>