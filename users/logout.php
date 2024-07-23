    <?php

    require_once __DIR__ . "../../assets/lib/session_vet.php";
    require_once __DIR__ . "../../assets/lib/session.php";

    session_regenerate_id(true);

    session_destroy();

    unset($_SESSION);

    header('location:../../login.php');

    ?>

