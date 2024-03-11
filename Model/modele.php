<?php

function dbconnect()
{
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=login", "root", "root", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        return $bdd;
    } catch (Exception $e) {
        die("Erreur de connection à la base : " . $e->getMessage());
    }
}


function insertUser($nom, $motDePasse)
{
    $pdo = dbconnect();
    $query = "INSERT INTO users (nom, motDePasse) VALUES (:nom, :motDePasse)";
    $addclient_result = $pdo->prepare($query);
    $addclient_result->execute(array(
        'nom' => $nom,
        'motDePasse' => $motDePasse
    ));
    return $addclient_result;
}

function GetPassword($nom)
{
    $pdo = dbconnect();
    $query = "SELECT * FROM users WHERE nom = :nom";
    $password_result = $pdo->prepare($query);
    $password_result->execute(array(
        'nom' => $nom
    ));
    return $password_result;
}