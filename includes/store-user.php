<<<<<<< Updated upstream:includes/store-user.php
<?php include_once '../includes/helpers.php';


$data = [
    'nom' =>  $_POST['name'],
    'prenom' =>  $_POST['first_name'],
    'datenaissance' =>  $_POST['dateofbirth'],
    'email' =>  $_POST['email'],
    'password' =>  $_POST['password'],

];


$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (nom, firstname, dob, email, password) VALUES (:nom, :firstname, :dob, :email, :password) ');
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':firstname', $data['prenom']);
$stmt->bindValue(':dob', $data['datenaissance']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->execute();


$id = $dbh->lastInsertId();
header('Location: ../');




header("Location: ../index.php?id=$id");
=======
<?php include_once '../includes/helpers.php';


$data = [
    'nom' =>  $_POST['name'],
    'prenom' =>  $_POST['first_name'],
    'datenaissance' =>  $_POST['dateofbirth'],
    'email' =>  $_POST['email'],
    'password' =>  $_POST['password'],

];


$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (nom, firstname, dob, email, password) VALUES (:nom, :firstname, :dob, :email, :password) ');
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':firstname', $data['prenom']);
$stmt->bindValue(':dob', $data['datenaissance']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->execute();


$id = $dbh->lastInsertId();
header('Location: ../');




header("Location: ../login.php");
>>>>>>> Stashed changes:assets/store-user.php
