<?php

include_once '../includes/helpers.php';

$email = $_POST['email'];
$dbh = connectDB();

$stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email');
$stmt->bindParam(':email', $email);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $user['password']);

if (!$user) {
    echo 'Mauvais identifiant ou mot de passe !';
} else {
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $user['id'];
        header("Location: ../index.php");
    } else {
        echo 'Mauvais identifiant ou mot de passe !';

    }
}
