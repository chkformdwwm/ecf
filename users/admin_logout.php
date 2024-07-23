    <?php
    require_once __DIR__ . "../../assets/lib/session_admin.php";

    session_regenerate_id(true);

    session_destroy();

    unset($_SESSION);

    header('location:administration.php');

    ?>
