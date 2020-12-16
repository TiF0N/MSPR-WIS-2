<?php
include_once 'includes/helpers.php';
// On test si la variable de session existe et contient une valeur
if(empty($_SESSION['id']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
    exit();
}

$user = getUser($_SESSION['id']);
?>

<div class="container mt-5">
    <figure class="text-center">
        <blockquote class="blockquote">
            <h2 class="text-white"><?php echo 'Bienvenue ', $user['nom'] . " " . $user['firstname']; // Ici on est bien log, on affiche un message ?></h2>
        </blockquote>
    </figure>
</div>
