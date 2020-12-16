<?php
require_once '../includes/helpers.php';

session_start();

if($_SESSION['id'] !== $_GET['id']){
    die();
}

$post = getUserPosts($_SESSION['id']);

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM posts WHERE id = :id');
$stmt->bindValue(':id', $post['id']);
$stmt->execute();

header('Location: ../index.php');