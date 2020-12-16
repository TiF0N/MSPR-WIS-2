<?php include_once '../includes/helpers.php';

session_start();

$data = [
    'content' => $_POST['content'],

];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (content, user_id) VALUES (:content, :user_id) ');
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':user_id', $_SESSION['id']);
$stmt->execute();

$id = $dbh->lastInsertId();
header('Location: ../');




