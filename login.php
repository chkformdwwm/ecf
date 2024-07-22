<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!--HEADER START-->
    <header class="d-flex justify-content-center">

        <nav class=" navbar fixed-top d-flex justify-content-center pt-5 mt-2">
            <?php require_once __DIR__ . "/assets/templates/navbar.php"; ?>
        </nav>

    </header>
    <!--HEADER END-->



    <?php
    require_once __DIR__ . "/assets/lib/session.php";
    require_once __DIR__ . "/assets/lib/session.php";
    require_once __DIR__ . "/assets/lib/user.php";
    require_once __DIR__ . "/assets/lib/pdo.php";


    $errors = [];
    if (isset($_POST['loginUser'])) {
        $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);
        //if ($user === false) {

        //  $errors[] = "E-mail ou mot de passe incorrect";
        //} else

        if (($user['staff_id'] === 1)) {
            //session employé
            $_SESSION['user'] = $user;
            header('location: /users/accueil_employe.php');
        } else

        if (($user['staff_id'] === 2)) {
            //session vétérinaire
            $_SESSION['vet'] = $user;
            header('location: /users/accueil_veterinaire.php');
        }
    }

    ?>



    <div class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column my-5 py-5">

        <h1 class="fw-bold my-5 py-5 text-center">Se connecter</h1>


        <?php


        foreach ($errors as $error) { ?>

            <div class="container col-xxl-8 alert alert-danger my-2 py-3 px-5" role="alert"><?= $error; ?></div>

        <?php
        }
        ?>

        <div class="container col-xxl-8 my-5 py-5 px-5">
            <div class="container-fluid col-xxl-10">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div>
                        <input type="submit" name="loginUser" value="Connexion" class="btn btn-warning">

                    </div>

                </form>
            </div>
        </div>
    </div>
    </header>

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