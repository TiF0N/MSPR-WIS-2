<?php
include_once '../includes/helpers.php';

$log = getLogin($_POST['email'],$_POST['password']);

if ($log == false) {
    header("Location: ./login.php");
}
else{
    session_start();
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['firstname'] = $_POST["firstname"];
    header("Location: ../index.php");
}