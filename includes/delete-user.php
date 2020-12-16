<?php
require_once '../includes/helpers.php';

session_start();

$user = getUser($_SESSION['id']);

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM users WHERE id = :id');
$stmt->bindValue(':id', $user['id']);
$stmt->execute();

header('Location: ../login.php');