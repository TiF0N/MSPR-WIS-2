<?php
include_once 'helpers.php';

$log = getLogin($_POST['email'],$_POST['password']);

if ($log == false) {
    header("Location: ./login.php");
}
else{
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST["password"];
    header("Location: ./index.php");
}