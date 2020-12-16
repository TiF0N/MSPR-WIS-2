<?php

//On se connecte à la base de données
function connectDB()
{
    return new PDO('mysql:host=localhost;dbname=sympholink', 'root', '',
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    );
}



//on récupère un user
function getLogin($email,$password){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT email, password FROM users WHERE email = :email AND password = :password");
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// On récupère un utilisateur basé sur son ID
function getUser($id){
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users WHERE id = $id");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// On récupere le contenu des posts
function getPosts(){
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM posts ORDER BY id ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//On recupere la liste des posts pour un utilisateur donné
function getUserPosts($id){
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM posts RIGHT JOIN users ON users.id = posts.user_id WHERE users.id = $id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}




?>
