
<?php include_once '../includes/helpers.php';


$data = [
    'content' =>  $_POST['content'],

];

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO posts (content) VALUES (:content) ');
$stmt->bindValue(':content', $data['content']);
$stmt->execute();

$id = $dbh->lastInsertId();
header('Location: ../');




