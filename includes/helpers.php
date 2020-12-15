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

?>
