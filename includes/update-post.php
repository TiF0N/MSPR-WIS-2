<?php
require_once '../includes/helpers.php';

session_start();

$user_id = $_SESSION['id'];
$post_id = $_GET['id'];

$data = [
    'content' =>  $_POST['content'],

    ];