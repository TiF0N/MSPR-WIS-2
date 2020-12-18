<?php
// includes helpers
session_start();

$post_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$liked = like($user_id, $post_id);

if (isAjax()){
    echo 'success';


}