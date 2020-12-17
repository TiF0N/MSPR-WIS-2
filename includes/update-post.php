<?php
require_once '../includes/helpers.php';

session_start();

$user_id = $_SESSION['id'];
$post_id = $_GET['id'];

$data = [
    'content' =>  $_POST['content'],

    ];

$dbh = connectDB();

$stmt = $dbh->prepare('UPDATE posts SET content = :content   WHERE id = :id');
$stmt->bindValue(':content', $data['content']);