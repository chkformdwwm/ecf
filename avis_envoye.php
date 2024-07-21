<<!DOCTYPE html>
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


            if (isset($_POST['newReview'])) {
                $res = newReview($pdo, $_POST['email'], $_POST['auteur'], $_POST['avis']);
            } else



            ?>



            <div class="container mt-5 pt-5">
                <div class="text-center my-5 py-5">
                    <h1 id="sent" class="my-5">Avis</h1>
                    <p>Votre avis a bien été envoyé.</p>
                    <p><a href="index.php">Revenir à l'accueil.<a></p>

                </div>

                <div class="container col-10">


                    <div class="container mt-5 pt-5">
                        <div>
                            <div>
                                <h2 class="text-center">Tous vos avis</h2>
                            </div>
                            <div>


                                <?php

                            $reviews = getReviews($pdo); ?>

                                <?php

                                foreach ($reviews as $review) { ?>


                                    <p>Auteur : <?= $review['auteur'] ?></p>
                                    <p>Avis : <?= $review['avis'] ?></p>
                                    <input id="id" name="id" type="hidden" value="<?= $review['id'] ?>" />

                                    <div class="border-bottom"></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>



        </main>



        <!-------------------------------------------------FOOTER------------------------------------------------->
        <footer>
            <div class="container">
                <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                    <div class="col mb-3">
                        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                            <svg class="bi me-2" width="40" height="32">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <p class="text-body-secondary">© 2024</p>
                    </div>

                    <div class="col mb-3">

                    </div>

                    <div class="col mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        </ul>
                    </div>

                    <div class="col mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        </ul>
                    </div>

                    <div class="col mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </footer>
    </body>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>

    </html>