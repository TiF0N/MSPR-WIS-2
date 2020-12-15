<?php

//On se connecte à la base de données
function connectDB()
{
    return new PDO('mysql:host=localhost;dbname=sympholink', 'root', '',
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    );
}


function getUserByEmail($email){

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

function getUser($nom,$firstname){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT nom, firstname FROM users WHERE nom = :email AND password = :password");
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':firstname', $firstname);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// On récupère un utilisateur basé sur son ID
function getUserData($id){
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users WHERE id = $id");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
