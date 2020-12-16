<?php

// On test si la variable de session existe et contient une valeur
if (empty($_SESSION['id'])) {
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
    exit();
}
