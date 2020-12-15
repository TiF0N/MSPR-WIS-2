
<?php include_once '../includes/helpers.php';


$data = [
    'nom' =>  $_POST['name'],
    'prenom' =>  $_POST['first_name'],
    'datenaissance' =>  $_POST['dateofbirth'],
    'email' =>  $_POST['email']

];

// Hachage du mot de passe
$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);


$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO users (nom, firstname, dob, email, password) VALUES (:nom, :firstname, :dob, :email, :password) ');
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':firstname', $data['prenom']);
$stmt->bindValue(':dob', $data['datenaissance']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $pass_hache);
$stmt->execute();

$id = $dbh->lastInsertId();
header('Location: ../');



header("Location: ../login.php");

