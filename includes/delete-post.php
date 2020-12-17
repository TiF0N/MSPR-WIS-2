<?php
require_once '../includes/helpers.php';

session_start();

$user_id = $_SESSION['id'];
$post_id = $_GET['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM posts WHERE id = :id');
$stmt->bindValue(':id', $post_id);
$stmt->execute();



header('Location: ../');