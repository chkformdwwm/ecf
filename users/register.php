<?php
require_once __DIR__ . "../../assets/lib/session_admin.php";
require_once __DIR__ . "../../assets/lib/pdo.php";
require_once __DIR__ . "../../assets/lib/user.php";
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

        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom position-absolute">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="../../assets/img/logo.png" alt="logo du zoo Arcadia" class="w-75"> </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
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
                        <li><a class="dropdown-item" href="accueil_admin.php">Accueil</a></li>
                        <li><a class="dropdown-item" href="admin_habitats.php">Habitats</a></li>
                        <li><a class="dropdown-item" href="admin_services.php">Services</a></li>
                        <li><a class="dropdown-item" href="user_list.php">Utilisateurs</a></li>
                    </ul>
                </li>
                <li>
                    <div class="col-md-3 text-end">
                        <?php if (isset($_SESSION['admin'])) { ?>
                            <a href="admin_logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                        <?php } else { ?>
                            <a href="administration.php"><button type="button" class="btn btn-primary me-2">Déconnexion</button></a>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </div>



    </header>







    <?php



    if (isset($_POST['addUser'])) {
        $add = addUser($pdo, $_POST['name'], $_POST['firstname'], $_POST['email'], (int)$_POST['staff_id']);
    }
    ?>



    <div class="d-flex flex-column">

        <div>
            <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
            <p class="text-center mb-5 pb-5">Espace administrateur</p>
        </div>

        <div>
            <?php
            $id = '';
            $user = getUser($pdo, $id);
            ?>

            <div>
                <h2 class="text-center my-5 py-5">Ajouter un utilisateur</h2>



                <div class=" container mb-5 pb-5">





                    <div class="container mb-5 pb-5">
                        <p><?php if (isset($_POST['addUser'])) {
                            ?>
                        <p class="text-center alert alert-success" role="alert"> <?= 'L\'utilisateur a bien été enregistré.'; ?><br></p>
                        <p class="text-center"><a href="accueil_admin.php">Retour à l'accueil</p>
                    <?php  }  ?> <br>



                    <?php if (!isset($_POST['addUser'])) { ?>

                        <form action="" method="post" class="mb-3">

                            <div>
                                <label for="name" class="form-label">Nom</label>
                                <input id="name" type="text" name="name" class="form-control" required />

                            </div><br />


                            <div>
                                <label for="firstname" class="form-label">Prénom</label>
                                <input id="firstname" type="text" name="firstname" class="form-control" required />
                            </div><br />

                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" required />
                            </div><br />



                            <label for="staff_id" class="form-label">Statut</label>
                            <select name="staff_id" id="staff_id" name="staff_id" class="form-control" required>
                                <option value="">Choisissez le statut de l'utilisateur</option>
                                <?php

                                $statuses = getStaff($pdo, $id);
                                foreach ($statuses as $status) { ?>
                                    <label for="staff" class="form-label">Statut</label>
                                    <option value="<?= $status['id'] ?>"><?= $status['category'] ?></option>
                                <?php } ?>

                                <div class="d-flex">
                                    <input type="submit" value="Valider" name="addUser" formaction="" class="btn btn-primary mx-2 my-3">
                                </div>
                        </form>

                        <div class="mt-5 text-center"><a href="accueil_admin.php">Revenir à l'accueil de votre espace.</div>

                    </div>
                </div>



            <?php } ?>

            </div>

        </div>

    </div>







    <footer>
        <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
    </footer>

    <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>

</html>