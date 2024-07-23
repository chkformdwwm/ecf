<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => '.localhost',
    'httponly' => true
]);

session_start();

function isUserVetConnected(): bool
{
    return isset($_SESSION['vet']);
}
