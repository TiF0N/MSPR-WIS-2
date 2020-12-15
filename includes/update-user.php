<?php include_once '../includes/helpers.php';

$id = $_GET['id'];



$data = [
    'nom' =>  $_POST['name'],
    'prenom' =>  $_POST['first_name'],
    'datenaissance' =>  $_POST['dateofbirth'],
    'email' =>  $_POST['email'],
    'password' =>  $_POST['password'],

];


$dbh = connectDB();

$stmt = $dbh->prepare('UPDATE users SET nom = :nom, prenom = :prenom, datenaissance = :datenaissance email = :email, password = :password  WHERE id = :id');
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':prenom', $data['prenom']);
$stmt->bindValue(':datenaissance', $data['datenaissance']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: ../index.php?id=$id");
