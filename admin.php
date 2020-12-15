<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['email']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
    exit();
}
?>

<div class="container mt-5">
    <figure class="text-center">
        <blockquote class="blockquote">
            <h2><?php echo 'Bienvenue ', $_SESSION['nom'] . ' ' . $_SESSION['firstname']; // Ici on est bien log, on affiche un message ?></h2>
        </blockquote>
    </figure>

</div>
