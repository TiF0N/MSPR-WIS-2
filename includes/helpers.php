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

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes

// On récupère un utilisateur basé sur son ID
function getUserData($id){
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users WHERE id = $id");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


//  Récupération de l'utilisateur et de son pass hashé
function getdata(){

    $dbh = connectDB();
    $stmt = $dbh->query("SELECT id, pass FROM users WHERE pseudo = :pseudo");
    $req->execute(array(
        'pseudo' => $pseudo));
    $resultat = $req->fetch();



}





?>