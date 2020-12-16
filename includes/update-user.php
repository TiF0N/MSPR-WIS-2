<?php include_once '../includes/helpers.php';


$user = getUser($_SESSION['id']);

$data = [
    'nom' =>  $_POST['nom'],
    'firstname' =>  $_POST['firstname'],
    'dob' =>  $_POST['dob'],
    'email' =>  $_POST['email'],
    'password' =>  $_POST['password'],
    'id' =>  $_POST['id'],


];


$dbh = connectDB();

$stmt = $dbh->prepare('UPDATE users SET nom = :nom, prenom = :prenom, dob = :dob email = :email, password = :password  WHERE id = :id');
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':prenom', $data['prenom']);
$stmt->bindValue(':datenaissance', $data['dateofbirth']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: ../index.php?id=$id");
