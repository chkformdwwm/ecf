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
    <div class="d-flex justify-content-center">

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom position-absolute">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="../../assets/img/logo.png" alt="logo du zoo Arcadia" class="w-75"> </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li class="../../nav-item dropdown"><a class="nav-link dropdown-toggle" href="habitats.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Habitats</a>
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




        if (isset($_POST['addAnimal'])) {
            $add = newAnimal($pdo, $_POST['nom'], $_POST['espece'], $_POST['espece_latin'], $_POST['description'], $_POST['photo_a'], $_POST['photo_b'], $_POST['photo_c'], $_POST['habitats_id']);
        } else

if (isset($_POST['deleteAnimal'])) {
            $delete = deleteAnimal($pdo, (int)$_POST['id']);
        } else


        ?>
        <main>
            <div class="container col-xxl-12  col-lg-12 col-md-12 d-flex flex-column">

                <h1 class="text-center mt-5 pt-5">Zoo Arcadia</h1>
                <p class="text-center mb-5 pb-5">Espace administrateur</p>


                <section class="py-5 container">
                    <div class="row py-lg-5">
                        <div class="col-lg-10 col-md-8 mx-auto">
                            <h1 class="fw-light text-center">Marais</h1>


                        </div>
                    </div>


                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">




                            <?php

                        // Récupération de tous les animaux de la table Animaux
                        $id = getAnimalById($pdo);

                        // tri du tableau pour obtenir uniquement les animaux du marais
                        asort($id);
                        function getSwampAnimals($animalId)
                        {
                            return $animalId['habitats_id'] === 3;
                        };

                        $swampAnimals = array_filter($id, 'getSwampAnimals');

                        // Boucle pour afficher chacun des animaux du tableau
                        foreach ($swampAnimals as $swampAnimal) { ?> <div class="col">

                                    <div class="mx-3 card h-100 shadow-sm">
                                        <div class="">
                                            <img src="../../assets/img/<?= $swampAnimal['photo_a'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        </div>
                                        <div class="card-body ">
                                            <h2><?= $swampAnimal['nom'] ?></h2>
                                            <h6 class=" card-subtitle mb-2 text-body-secondary"><?= $swampAnimal['espece'] ?></h6>
                                            <div class="border-bottom mb-3"></div>
                                            <div class="row mb-3">
                                                <p class="card-text"><?= $swampAnimal['description'] ?></p>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-end">
                                                <div class="">

                                                    <div class="d-flex">
                                                        <form action="" method="post">
                                                            <input id="id" name="id" type="hidden" value="<?= $swampAnimal['id'] ?>" />
                                                            <input type="submit" value="Voir la fiche" formaction="../../animal.php" name="displayAnimal" class="btn btn-primary mx-2">
                                                        </form>
                                                        <form action="" method="post">
                                                            <input id="id" name="id" type="hidden" value="<?= $swampAnimal['id'] ?>" />
                                                            <input type="submit" value="Modifier la fiche" formaction="modifier_animal.php" name="updateAnimal" class="btn btn-primary mx-2">
                                                        </form>
                                                    </div>
                                                    <form action="" method="post">
                                                        <input id="id" name="id" type="hidden" value="<?= $swampAnimal['id'] ?>" />
                                                        <input type="submit" value="Supprimer la fiche" formaction="animal_supprime.php" name="deleteAnimal" class="btn btn-primary mx-2" onclick=" return confirm('Êtes-vous certain.e de vouloir supprimer cet animal ?')">
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

                    </div>
                </section>

                <section>

                    <div>
                        <h2 class="text-center my-5 py-5">Ajouter un animal au sein de cet habitat</h2>


                        <div class="container mb-5 pb-5">
                            <form action="" method="post">


                                <div>
                                    <label for="nom" class="form-label">Nom</label>
                                    <input id="nom" type="text" name="nom" class="form-control" required />
                                </div><br />


                                <div>
                                    <label for="espece" class="form-label">Espèce</label>
                                    <input id="espece" type="text" name="espece" class="form-control" required />

                                </div><br />


                                <div>
                                    <label for="espece_latin" class="form-label">Nom latin</label>
                                    <input id="espece_latin" type="text" name="espece_latin" class="form-control" required />
                                </div><br />



                                <div>
                                    <label for="animaux_photo_a" class="form-label">Photo 1</label>
                                    <input id="animaux_photo_a" type="text" name="photo_a" class="form-control" required />
                                </div><br />

                                <div>
                                    <label for="animaux_photo_b" class="form-label">Photo 2</label>
                                    <input id="animaux_photo_b" type="text" name="photo_b" class="form-control" required />
                                </div><br />

                                <div>
                                    <label for="animaux_photo_c" class="form-label">Photo 3</label>
                                    <input id="animaux_photo_c" type="text" name="photo_c" class="form-control" required />
                                </div><br />

                                <div>
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" rows="4" cols="50" class="form-control" required></textarea>
                                </div><br />


                                <div>
                                    <label for="habitats_id" class="form-label">Habitat</label>
                                    <select name="habitats_id" id="habitats_id" name="habitats_id" class="form-control" required>
                                        <option value="">Indiquez l'habitat</option>
                                        <?php

                                        $habitats = getHabitats($pdo);
                                        foreach ($habitats as $habitat) { ?>
                                            <option value="<?= $habitat['id'] ?>"><?= $habitat['name'] ?></option>
                                        <?php } ?>
                                </div><br />

                                <div>
                                    <input id="id" name="id" type="hidden" value="<?= $animal['animal_id'] ?>" />

                                </div>


                                <div class="d-flex mt-3">


                                    <input type="submit" value="Valider" name="addAnimal" class="btn btn-primary mx-2">


                                </div>
                            </form>

                        </div>
                </section>
            </div>
        </main>

    </div>

    <footer>
        <?php require_once __DIR__ . "../../assets/templates/footer.php" ?>
    </footer>
    <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
</body>