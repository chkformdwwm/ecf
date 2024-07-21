<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./scripts/navbarscroll.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<?php require_once __DIR__ . "/assets/templates/navbar.php"; ?>

<body>





    <main>


        <?php
        require_once __DIR__ . "/assets/lib/pdo.php";
        require_once __DIR__ . "/assets/lib/avis-visiteurs.php";


        ?>



        <div class="container mt-5 pt-5">

            <div class="container col-10 my-5 py-5">

                <div class="text-center my-5 py-5">
                    <h1 id="sent">Merci</h1>
                    <p>Votre message a bien été envoyé.</p>
                    <p><a href="./index.php">Revenir à l'accueil.<a></p>
                </div>
            </div>



    </main>



    <footer>
        <?php require_once __DIR__ . "/assets/templates/footer.php" ?>
    </footer>
</body>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

</html>