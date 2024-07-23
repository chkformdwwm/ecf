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

<?php require_once __DIR__ . "/assets/templates/navbar.php"; ?>

<body>
    <!--HEADER START-->
    <header class="d-flex justify-content-center">
        <div class="d-flex align-items-end">
            <div class="container position-absolute cover_text">
                <h1 class="display-1 fw-bold text-light cover_title">Habitats</h1>
                <p class="lead mb-4 fw-medium text-light cover_paragraph">Les animaux du zoo Arcadia se répartissent sur trois habitats reproduisant chacun un milieu naturel adapté à leurs besoins.</p>
            </div>
        </div>
        <div>
            <img src="assets/img/cover_habitats.png" class="w-100 h-100 img-fluid cover_img" alt="Un guépard en gros planc allongé sur une branche d'arbre">
        </div>

    </header>
    <!--HEADER END-->


    <main>
        <!--SECTION SAVANE START-->
        <section class="container d-flex my-5 py-5 col-xxl-12 col-lg-10 col-md-12">
            <div class="row">
                <div class="container d-flex justify-content-center align-items-center col-xxl-6 col-lg-6">
                    <img src="./assets/img/savane.jpg" alt="Un lion et un lionceau allongés dans l'herbe côte à côte" class="img-fluid rounded-4 mx-5">
                </div>
                <div class="container d-flex justify-content-center align-items-center pt-5 col-xxl-6 col-lg-6">
                    <div class="mx-5 d-flex flex-column">
                        <h2 class="text-center mb-4 fw-bold">La savane</h2>
                        <p>La savane est un milieu naturel caractérisé par une vaste étendue herbeuse parsemée de quelques arbres et arbustes. On le trouve principalement dans les zones tropicales et subtropicales, notamment en Afrique, en Amérique du Sud, en Australie et en Inde. Son climat est marqué par une alternance de saisons sèches et humides.</p>
                        <p>La faune de la savane est extrêmement diverse. Elle abrite certains des plus grands herbivores de la planète, tels que les éléphants, les girafes, et les buffles, ainsi que de nombreux prédateurs comme les lions, les léopards, et les guépards.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="savane.php" class="btn btn-warning px-5 my-5">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION SAVANE END-->

        <!--SECTION JUNGLE START-->
        <section class="container d-flex mb-5 py-5 col-xxl-12 col-lg-10 col-md-12">
            <div class="row">
                <div class="container d-flex justify-content-center align-items-center col-xxl-6 col-lg-6">
                    <img src="./assets/img/jungle.jpg" alt="Deux rouges perchés côte à côte, de dos, sur une branche d'arbre" class="img-fluid rounded-4 mx-5">
                </div>
                <div class="container d-flex justify-content-center align-items-center pt-5 col-xxl-6 col-lg-6">
                    <div class="mx-5 d-flex flex-column">
                        <h2 class="text-center mb-4 fw-bold">La jungle</h2>
                        <p>La jungle se caractérise par une végétation dense et diversifiée. Située principalement autour de l’équateur, son climat est chaud et humide toute l’année</p>.

                        <p>La végétation y est stratifiée en plusieurs niveaux. La canopée, formée par les cimes des arbres, peut atteindre jusqu’à 60 mètres de hauteur et abrite une grande partie de la biodiversité. Le sous-bois est plus sombre et moins dense, mais tout aussi riche en espèces végétales et animales.</p>

                        <p>La faune de la jungle est incroyablement variée. Elle comprend des mammifères comme les jaguars, les éléphants et les singes, ainsi que d'innombrables oiseaux, reptiles, amphibiens et insectes. </p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="jungle.php" class="btn btn-warning px-5 my-5">Découvrir</a>
                        </div>
                    </div>
                </div>

        </section>
        <!--SECTION JUNGLE END-->

        <!--SECTION MARSH START-->
        <section class="container d-flex mb-5 pb-5 col-xxl-12 col-lg-10 col-md-12">
            <div class="row">
                <div class="container d-flex justify-content-center align-items-center col-xxl-6 col-lg-6">
                    <img src="./assets/img/marais.jpg" alt="un flamand rose debout dans les eaux verts d'un marais près d'un rivage arboré" class="img-fluid rounded-4 mx-5">
                </div>
                <div class="container d-flex justify-content-center align-items-center pt-5 col-xxl-6 col-lg-6">
                    <div class="mx-5 d-flex flex-column">
                        <h2 class="text-center mb-4 fw-bold">Le marais</h2>
                        <p>Les marais sont des zones humides caractérisées par une saturation en eau, soit en permanence, soit de façon saisonnière. Ils se trouvent souvent dans les vallées fluviales, les zones côtières ou les bassins fermés. La végétation des marais comprend principalement des plantes hydrophiles telles que les roseaux, les joncs et les carex, qui sont adaptées aux sols gorgés d'eau.

                        <p> Les marais jouent un rôle crucial dans la régulation des flux d'eau, agissant comme des éponges naturelles qui absorbent l'excès d'eau et réduisent les risques d'inondation. Ils filtrent également les polluants, améliorant ainsi la qualité de l'eau.</p>
                        <p> La faune des marais est diversifiée, abritant de nombreuses espèces d'oiseaux, de poissons, d'amphibiens et d'invertébrés. Les oiseaux migrateurs trouvent souvent refuge dans les marais pendant leurs trajets saisonniers.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="marais.php" class="btn btn-warning px-5 my-5">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION MARSH START-->




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