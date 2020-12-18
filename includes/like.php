<?php
require_once '../includes/helpers.php';

session_start();


$user_id = $_SESSION['id'];
$user_post = getUserPosts($_SESSION['id']);
var_dump($user_post);

$dbh = connectDB();
$stmt = $dbh->prepare('UPDATE ');
$stmt->bindValue(':id', $post_id);
$stmt->execute();



header('Location: ../');