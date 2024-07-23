<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitats</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./scripts/navbarscroll.js"></script>
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

    <main>

        <?php
        require_once __DIR__ . "/assets/lib/pdo.php";
        require_once __DIR__ . "/assets/lib/avis-visiteurs.php";

        $errorReview = [];

        if (isset($_POST['saveReview'])) {
            if (!empty($_POST['email'])) {
                $res = saveReview($pdo, $_POST['email'], $_POST['auteur'], $_POST['avis']);
                header('Location: avis_envoye.php#sent?id=' . $res);
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
            <div class="text-center mb-5 pb-5">
                <h1 class="display-5 fw-bold mt-5 pt-5">Donnez-nous votre avis</h1>
                <p>Vos avis nous sont précieux. Ils nous aident à améliorer nos services pour rendre votre visite au zoo inoubliable.</p>
            </div>


            <div>
                <?php foreach ($errorReview as $error) { ?>
                    <div class="alert alert-danger">
                        <?= $error; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="container col-10 mb-5 pb-5">
                <form action="" method="post">


                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" class="form-control" required />
                    </div><br />


                    <div>
                        <label for="auteur" class="form-label">Pseudo</label>
                        <input id="auteur" type="text" name="auteur" class="form-control" required />
                    </div><br />

                    <div>
                        <label for="avis" class="form-label">Avis</label>
                        <textarea id="avis" name="avis" rows="4" cols="50" class="form-control" required></textarea>
                    </div><br />



                    <div>
                        <input type="submit" value="Valider" name="saveReview" class="btn btn-primary">
                    </div>
                </form>
                <div>
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