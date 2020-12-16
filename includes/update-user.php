<?php include_once '../includes/helpers.php';


session_start() ;

$id = $_SESSION['id'];


$data = [
    'nom' =>  $_POST['nom'],
    'firstname' =>  $_POST['firstname'],
    'dob' =>  $_POST['dob'],
    'email' =>  $_POST['email'],
    'id' =>  $_GET['id'],
    'profile_pic' =>  $_POST['profile_pic'],
    'specialty' =>  $_POST['specialty'],
    'ville' =>  $_POST['ville'],
    'mobile' =>  $_POST['mobile'],
    'bio' => $_POST['bio']


];


$dbh = connectDB();

$stmt = $dbh->prepare('UPDATE users SET nom = :nom, firstname = :firstname, dob = :dob, email = :email,  profile_pic = :profile_pic, specialty = :specialty, ville = :ville, mobile = :mobile, bio = :bio   WHERE id = :id');
$stmt->bindValue(':nom', $data['nom']);
$stmt->bindValue(':firstname', $data['firstname']);
$stmt->bindValue(':dob', $data['dob']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':profile_pic', $data['profile_pic']);
$stmt->bindValue(':specialty', $data['specialty']);
$stmt->bindValue(':ville', $data['ville']);
$stmt->bindValue(':mobile', $data['mobile']);
$stmt->bindValue(':bio', $data['bio']);
$stmt->bindValue(':id', $data['id']);
$stmt->execute();

header("Location: ../profile.php?id=$id");
